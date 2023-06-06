<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\Product\SortingRequest;
use App\Models\Basket;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use function Symfony\Component\Translation\t;

class IndexController extends Controller
{

    public function start(Request $request)
    {

        if (!is_null($request->get('sort'))) {
            $return['sort'] = $request->get('sort');
            if (isset($return['sort']['id']) && ($return['sort']['id'] == 'asc' || $return['sort']['id'] == 'desc')) {
                $query = Products::query()->orderBy('id', $return['sort']['id']);
            } elseif (isset($return['sort']['price']) && ($return['sort']['price'] == 'asc' || $return['sort']['price'] == 'desc')) {
                $query = Products::query()->orderBy('price', $return['sort']['price']);
            } else {
                $query = Products::query()->orderBy('id', 'desc');
            }
        } else {
            $query = Products::query()->orderBy('id', 'desc');
        }

        $return['all'] = $query->Paginate(12);
        $return['categories'] = Categories::all()->where('parent_id', null);
        $return['baskets'] = auth()->check() ? User::find(auth()->id())->basket : null;
        if (!is_null($return['baskets']))
        {
            foreach ($return['baskets'] as $count => $basket)
            {
                $return['baskets'][$count] = $basket->product;
                $return['baskets'][$count]['products_count'] = $basket->products_count;
            }
        }

        foreach ($return['all'] as $index => $value) {
            $data = json_decode($value['prefixes']);

            $return['all'] [$index] ['hot'] = $data->hot;
            $return['all'] [$index] ['new'] = $data->new;
            $return['all'] [$index] ['sale'] = $data->sale;
            $return['all'] [$index] ['discount'] = $data->discount;
        }

        return view('main.welcome', $return);
    }

    public function details(Request $request, $id)
    {

        if (is_numeric($id)) {
            $return['categories'] = Categories::all()->where('parent_id', null);

            $return['product'] = Products::find($id);
            $return['latestProducts'] = Products::whereNotIn('id', [$id])->orderByDesc('id')->take(4)->get();

            $return['category'] = $return['product']->category;
            $data = json_decode($return['product']['prefixes']);

            $return['product'] ['hot'] = $data->hot;
            $return['product'] ['new'] = $data->new;
            $return['product'] ['sale'] = $data->sale;
            $return['product'] ['discount'] = $data->discount;

            $return['baskets'] = auth()->check() ? User::find(auth()->id())->basket : null;
            if (!is_null($return['baskets']))
            {
                foreach ($return['baskets'] as $count => $basket)
                {
                    $return['baskets'][$count] = $basket->product;
                    $return['baskets'][$count]['products_count'] = $basket->products_count;
                }
            }

            return view('main.product', $return);
        } else {
            return view('404');
        }
    }

    public function shopCart()
    {
        if (!auth()->check()) return redirect('/login');
        $return['categories'] = Categories::all()->where('parent_id', null);
        $return['baskets'] = User::find(auth()->id())->basket;
        if (!is_null($return['baskets']))
        {
            foreach ($return['baskets'] as $count => $basket)
            {
                $return['baskets'][$count] = $basket->product;
                $return['baskets'][$count]['products_count'] = $basket->products_count;
            }
        }
        return view('basket.shop_cart',$return);
    }


    public function shopCheckout()
    {
        if (!auth()->check()) return redirect('/login');
        $return['categories'] = Categories::all()->where('parent_id', null);
        $return['baskets'] = auth()->check() ? User::find(auth()->id())->basket : null;
        $return['subtotal'] = 0;
        if (!is_null($return['baskets']))
        {
            foreach ($return['baskets'] as $count => $basket)
            {
                $return['baskets'][$count] = $basket->product;
                $return['baskets'][$count]['products_count'] = $basket->products_count;

                $return['subtotal'] += ($basket->products_count *  $return['baskets'][$count]->price);
            }
        }

        return view('basket.shop_checkout',$return);
    }

    public function shopOrderCompleted(OrderRequest $request)
    {
        $request->validated();
        $return['categories'] = Categories::all()->where('parent_id', null);
        // Тут запись куда-то. Но сие действо не предусмотрено
        return view('basket.order_completed',$return);
    }

}

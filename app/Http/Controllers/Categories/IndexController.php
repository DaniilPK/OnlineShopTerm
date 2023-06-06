<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function getProductsByCategory(Request $request, $id)
    {


        if (!is_null($request->get('sort'))) {
            $return['sort'] = $request->get('sort');
            if (isset($return['sort']['id']) && ($return['sort']['id'] == 'asc' || $return['sort']['id'] == 'desc')) {
                $query = Products::query()->orderBy('id', $return['sort']['id'])->where('category_id', $id);
            } elseif (isset($return['sort']['price']) && ($return['sort']['price'] == 'asc' || $return['sort']['price'] == 'desc')) {
                $query = Products::query()->orderBy('price', $return['sort']['price'])->where('category_id', $id);
            } else {
                $query = Products::query()->orderBy('id', 'desc')->where('category_id', $id);
            }
        } else {
            $query = Products::query()->orderBy('id', 'desc')->where('category_id', $id);
        }

        $return['categories'] = Categories::all()->where('parent_id', null);
        $return['products'] = $query->Paginate(12);
        $return['baskets'] = auth()->check() ? User::find(auth()->id())->basket : null;
        if (!is_null($return['baskets'])) {
            foreach ($return['baskets'] as $count => $basket) {
                $return['baskets'][$count] = $basket->product;
                $return['baskets'][$count]['products_count'] = $basket->products_count;
            }
        }


        $return['request'] = $request;
        return view('products.products', $return);
    }


    public function categorySelecting($id)
    {

        $return['categories'] = Categories::all()->where('parent_id', $id);
        if ($return['categories']->isNotEmpty()) {
            return view('categories.category', $return);
        } else {
            return redirect("/category/$id/products");
        }

    }
}

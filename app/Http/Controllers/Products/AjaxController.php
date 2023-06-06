<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function startAjaxAdd(Request $request){
        if (auth()->check()) {
            $return = Basket::query()
                ->where('products_id', $request->get('id'))
                ->where('users_id', auth()->id())->get();
            if ($return->isEmpty()) {
                Basket::create([
                    'products_id' => $request->get('id'),
                    'users_id' => auth()->id(),
                ]);
            } else {
                $return[0]->update(['products_count' => $return[0]->products_count+1]);
            }
            return true;
        }
        return false;
    }

    public function startAjaxAddMany(Request $request){
        if (auth()->check()) {
            $return = Basket::query()
                ->where('products_id', $request->get('id'))
                ->where('users_id', auth()->id())->get();
            if ($return->isEmpty()) {
                Basket::create([
                    'products_id' => $request->get('id'),
                    'users_id' => auth()->id(),
                    'products_count' => $request->get('itemCount'),
                ]);
            } else {
                $return[0]->update(['products_count' => $return[0]->products_count+$request->get('itemCount')]);
            }
            return true;
        }
        return false;
    }

    public function startAjaxDell(Request $request){
        if (auth()->check()) {
            return Basket::query()
                ->where('products_id', $request->get('id'))
                ->where('users_id', auth()->id())
                ->delete();
        }
        return false;
    }

    public function startAjaxEditCount(Request $request)
    {
        if (auth()->check()) {
            return Basket::where('products_id', $request->get('id'))
                ->where('users_id', auth()->id())->update(['products_count' => $request->get('count')]);
        }
        return false;
    }
}

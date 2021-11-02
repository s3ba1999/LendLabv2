<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request){
        $option = Item::findOrFail($request->item_id);
        $cart = [];
        if($request->session()->get('cart') != null){
            $cart = $request->session()->get('cart');
            if(array_key_exists($request->item_id, $cart))
                $cart[$request->item_id]['amount'] = $cart[$request->item_id]['amount'] + $request->quanty;
            else
                $cart[$request->item_id] = ['amount'  =>  $request->quanty,
                                            'item_name' =>  $option->name,
                                            'item_id' =>  $request->item_id];
        }else{
            $cart[$request->item_id] = ['amount'  =>  $request->quanty,
                                        'item_name' =>  $option->name,
                                        'item_id' =>  $request->item_id];
        }
        $request->session()->put('cart', $cart);
        return redirect()->route('public.cart');
    }

    public function cart(){
        return view('public.cart');
    }

    public function rmvCart(Request $request, $id){
        $cart= $request->session()->get('cart');
        unset($cart[$id]);
        // dd($cart);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}

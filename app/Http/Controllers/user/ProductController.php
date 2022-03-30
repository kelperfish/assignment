<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = products::all();
        return view('user.product')->with('products', $products);
    }

    public function show($id)
    {
        $products = products::find($id);
        return view('user.productDetails')->with('products', $products);
    }

    public function addCart(Request $request)
    {
        $cart = cart::where('userID', request('userID'))->where('productID', request('productID'))->first();
        
        if ($cart !== null) {
            $cart->update(['cartQty' => cart::raw('cartQty + 1')]);
        } else {
            $cart = new cart([
                'productID' => $request->get('productID'),
                'cartQty' => "1",
                'userID' => $request->get('userID')
            ]);
        }

        $cart->save();
        // return redirect()->back();
        return back()->with('success','Item created successfully!');
    }

    public function search(Request $request){
        if($request->isMethod('post')){
            $name = $request->get('searchResult');
            $data = products::where('productName', 'LIKE', '%'. $name . '%')->paginate(5);
        }
        return view('user.product')->with('products', $data);
    }
}
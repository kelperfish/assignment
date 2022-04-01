<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class CartController extends Controller
{
    public function index()
    {
        $data = DB::table('carts')
            ->join('products', 'carts.productID', '=', 'products.ProductID')
            ->where('carts.userID', '=', 2)            //hard code userID for testing
            ->select(
                'products.ProductName',
                'products.ProductImage',
                'products.ProductPrice',
                'carts.id',
                'carts.CartQty',
                'carts.UserID',
                'carts.ProductID',
                DB::raw('(carts.cartQty)*(products.ProductPrice) AS subtotal'),
            )
            ->get();

        if($data->isEmpty()){
            return view('user.EmptyCart');
        }
        return view('user.cart')->with('data', $data);
    }

    public function removeFromCart($id)
    {
        $remove = cart::find($id);
        $remove->delete();
        return redirect()->back();
    }

    public function addQty($id)
    {
        $add = cart::find($id);
        $add->update(['cartQty' => cart::raw('cartQty + 1')]);
        return redirect()->back();
    }

    public function minusQty($id)
    {
        $minus = cart::find($id);
        $checkQty = cart::select('cartQty')->where('id', $id)->first()->checkQty;

        if ($checkQty == '0') {
            $minus->delete();
        } 
        else {
            $minus->update(['cartQty' => cart::raw('cartQty - 1')]);
        }
        // return $checkQty;
        $minus->save();
        return redirect()->back();
    }
}

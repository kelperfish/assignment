@extends('layouts.app')

@section('content')

<div class="container">
    <h5><a href="{{ url('product') }}" class="black-text"><i class="material-icons small left">arrow_back</i>Back to browse</a></h5>
    <div class="row">
        <br />
        <div class="col s12 m4">
            <br /><br /><br /><br />
            <img src="{{ asset('storage/images/' . $products->productImage)}}" alt="image" style="width:250px;height:173px;">
        </div>
        <div class="col s12 m8">
            <h3 style="font-family: Candara">{{ $products->productName }}</h3>
        </div>
        <div class="col s12 m8">
            <form id="submitProduct" action="{{ route('user.productDetails')}}" method="POST">
                @csrf
                <!-- {{ csrf_field() }} -->
                <input type="hidden" name="productID" value="{{ $products->productID }}">
                <!-- hard code userID for testing -->
                <input type="hidden" name="userID" value="2">
                <p><b>Product Description</b></p>
                <p>Built for linear speed and endurance. Our shoes puts Flight Speed technology beneath your feet to disperse your force and give you ultimate energy return.
                    This shoe texttile upper gives you breathable, comfortable midfoot lockdown.
                </p>
                <p>Stock: {{ $products->productQty }}</p>
                <h5>RM {{ $products->productPrice }}</h5>
                <a class="waves-effect waves-light orange btn" href="javascript:;" onclick="document.getElementById('submitProduct').submit()">add to cart<i class="material-icons left">add_shopping_cart</i></a>
                <a class="waves-effect waves-light pink btn" href="">add to wishlist<i class="material-icons left">favorite</i></a>
            </form>
        </div>
    </div>

    <div class="section">
        <h4>Reviews</h4>
        <div class="divider"></div>
        <p><i class="material-icons left medium">account_circle</i>
            <b>Wai Kit</b>
            <br />
            Best shoes I've even seen!
        </p>
        <!-- <div class="divider"></div> -->
        <p><i class="material-icons left medium">account_circle</i>
            <b>Jia Lok</b>
            <br />
            The most comfy shoes I've ever owned!
        </p>
        <!-- <div class="divider"></div> -->
        <p><i class="material-icons left medium">account_circle</i>
            <b>Jason Wu</b>
            <br />
            Reasonable price!
        </p>
    </div>
    <br />
</div>

@endSection
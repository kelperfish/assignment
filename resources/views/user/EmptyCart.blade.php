@extends('layouts.app')

@section('content')

<div class="container">
    <br /><br />
    <div class="center-align">
        <img src="{{ asset('storage/images/emptyCart.png') }}">
        <br /><br /><br />
        <a class="waves-effect waves-light orange darken-4 btn" href="{{ url('product') }}"><i class="material-icons left">shopping_basket</i>back to shopping</a>
    </div>
    <br />
</div>

@endSection
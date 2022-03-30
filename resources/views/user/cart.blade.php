@extends('layouts.app')

@section('content')
<div class="section no-pad-bot" id="index-banner">
    <h1 class="header center black-text" style="font-family: Candara">Cart</h1>
    <div class="container">
        <div class="row center">
            <table class="centered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th></th>
                        <th>Quantity</th>
                        <th></th>
                        <th>Subtotal (RM)</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $c)
                    <tr>
                        <td>{{ $c->ProductName }}</td>
                        <td><img src="{{ asset('storage/images/' . $c->ProductImage)}}" style="width:200;height:150px;" alt="Image"></td>
                        <td>{{ $c->ProductPrice }}</td>
                        <td><a class="btn-floating btn waves-effect waves-light blue darken-4 right" href="{{ url('minus' . '/' . $c->id) }}"><i class="material-icons">remove</i></a></td>
                        <td>{{ $c->CartQty }}</td>
                        <td><a class="btn-floating btn waves-effect waves-light blue darken-4 left" href="{{ url('add' . '/' . $c->id) }}"><i class="material-icons">add</i></a></td>
                        <td>{{ $c->subtotal }}</td>
                        <td><a class="waves-effect waves-light red btn" href="{{ url('delete' . '/' . $c->id) }}"><i class="material-icons">delete</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="waves-effect waves-light orange btn right"><i class="material-icons left">payment</i>proceed to payment</a>
        </div>
    </div>
    @endSection
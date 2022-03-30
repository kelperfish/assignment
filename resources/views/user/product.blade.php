@extends('layouts.app')

@section('content')

<h1 class="header center black-text" style="font-family: Candara">Our Products</h1>
<div class="container">
  <nav>
    <div class="nav-wrapper white">
      <form action="{{ url('/search') }}" method="post">
        <div class="input-field">
          {{ csrf_field() }}
          <input id="search" name="searchResult" type="search" placeholder="Search for Products" required>
          <label class="label-icon" for="search"><i class="material-icons grey-text text-grey darken-4">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  <br />
</div>

<!-- sidebar -->
<div class="row">
  <div class="container">
    <div class="row">
      @foreach($products as $p)
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('storage/images/' . $p->productImage)}}" alt="pictures" style="width:292.25px;height:202.23px;">
          </div>
          <div class="card-content center-align">
            <span class="card-title">{{ $p->productName }}</span>
            <p>RM {{ $p->productPrice }}</p></br>
            <a class=" waves-effect waves-light orange btn" href="{{url('/product/' . $p->id)}}">view product</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  @endSection
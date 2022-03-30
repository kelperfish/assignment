@extends('layouts.app')

@section('content')

<section class="slider">
  <ul class="slides">
    <li>
      <img src="{{ asset('storage/images/slider1.jpg') }}"> <!-- slider 1 -->
      <div class="caption center-align">
        <h1 style="font-family: Candara">NGSC Shoes</h1>
        <h5 class="light grey-text text-lighten-3">Give Your Feet the Beauty Treatment that Only Brand New Shoes can Give.</h5>
        <br />
        <a class="white black-text waves-effect waves-light btn-large" href="{{ url('product') }}">browse products</a>
      </div>
    </li>
    <li>
      <img src="{{ asset('storage/images/slider2.jpg') }}"> <!-- slider 2 -->
      <div class="caption left-align">
        <h1 style="font-family: Candara">Mission</h1>
        <h5 class="light grey-text text-lighten-3">The Journey Begins with the Perfect Pair.</h5>
        <br />
        <a class="white black-text waves-effect waves-light btn-large">learn more</a>
      </div>
    </li>
    <li>
      <img src="{{ asset('storage/images/slider3.jpg') }}"> <!-- slider 3 -->
      <div class="caption right-align">
        <h1 style="font-family: Candara">Vision</h1>
        <h5 class="light grey-text text-lighten-3">Chase your dreams… in high heels of course.</h5>
        <br />
        <a class="white black-text waves-effect waves-light btn-large" href="/aboutUs">about us</a>
      </div>
    </li>
  </ul>
</section>

<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">flash_on</i></h2>
          <h5 class="center">Speeds up development</h5>
          <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined designs to provide a smoother experience for customers.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">group</i></h2>
          <h5 class="center">User Experience Focused</h5>
          <p class="light">By utilizing elements and principles of Shoes Design, we were able to create a shoes that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">settings</i></h2>
          <h5 class="center">Easy to work with</h5>
          <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about NGSC Shoes.</p>
        </div>
      </div>
    </div>

  </div>
  <br><br>
</div>

@endsection
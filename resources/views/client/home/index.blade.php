@extends('client.master')

@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection

@section('title', 'HomePage')

@section('jquery')
<script src="/js/home.js"></script>
@endsection

<!--
@section('javascript')
<script type="text/javascript" href="/js/home.js"> </script>
@endsection -->

@section('content')
<div class="slide-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="{{url('/img/slide1.png')}}" style="width:100%" />
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{url('/img/slide2.png')}}" style="width:100%" />
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{url('/img/slide3.png')}}" style="width:100%" />
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="row">
    <div class="column">
        <img src="{{url('/img/slide1.png')}}" alt="Slide1" style="width:100%">
    </div>
    <div class="column">
        <img src="{{url('/img/slide2.png')}}" alt="Slide2" style="width:100%">
    </div>
    <div class="column">
        <img src="{{url('/img/slide3.png')}}" alt="Slide3" style="width:100%">
    </div>
</div>


@endsection
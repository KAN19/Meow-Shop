@extends('client.master')

@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection

@section('bootstrap')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('title', 'HomePage')



@section('content')
<div class="container float-md-start">
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="/filemanager/img/slide1.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="/filemanager/img/slide2.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="/filemanager/img/slide3.png" style="width:100%">
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

    <!-- The dots/circles -->
    <div class="row align-items-start float-md-start">
        <div class="col">
            <img src="/filemanager/img/slide1.png" alt="Slide1" style="width:100%">
        </div>
        <div class="col">
            <img src="/filemanager/img/slide3.png" alt="Slide2" style="width:100%">
        </div>
        <div class="col">
            <img src="/filemanager/img/slide2.png" alt="Slide3" style="width:100%">
        </div>
    </div>
</div>
@endsection

@section('jquery')
<script src="/js/home.js"></script>
@endsection
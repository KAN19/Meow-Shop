@extends('client.master')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('title', 'title ne')

@section('jquery')
<script src="/js/home.js"></script>
@endsection

@section('content')
<!--Nha Cung Cap-->

<!--Trending Products-->
<div id="trendingProducts">
    <p class="h3 text-center">Trending Products</p>
</div>
<div class="row justify-content-md-center" id="categories">
    <div class="box-e col col-lg-2">
        <a href="#" class="custom-underline">Cat Foods</a>
    </div>
    <div class="box-e col col-lg-2">
        <a href="#" class="custom-underline">Dog Foods</a>
    </div>
    <div class="box-e col col-lg-2">
        <a href="#" class="custom-underline">Pet Toys</a>
    </div>
</div>

<!--Product Photos-->
<div class="row justify-content-md-center" id="products">
    <div class="row">
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product1" style="width:100%">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product2" style="width:100%">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><del>9.99$</del> <strong>8.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product3" style="width:100%">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><del>8.99$</del> <strong>8.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product4" style="width:100%">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><del>9.99$</del> <strong>8.99$</strong></p>
        </div>
    </div>
</div>

<!--'Show All' Button-->
<div class="row justify-content-md-center" id="show-button">
    <button class="show-button" role="button">Show all</button>
</div>

<br>
<!--OUR PARTNERS-->
<div id="partners">
    <p class="h3 text-center">Our Partners</p>
    <p class="h7 text-center">Vision, commitment, partnership</p>
</div>

<div class="row partner-photo">
    <div class="col-sm">
        <img src="/image/logo1.png" alt="logo1" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo2.png" alt="logo2" style="width:55%">
        <p class=" h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo3.png" alt="logo3" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo4.png" alt="logo4" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
</div>
<br>
<div class="row partner-photo">
    <div class="col-sm">
        <img src="/image/logo5.png" alt="logo5" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo6.png" alt="logo6" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo7.png" alt="logo7" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col-sm">
        <img src="/image/logo8.png" alt="logo8" style="width:55%">
        <p class="h6">Partner's name</p>
    </div>
</div>


<!--follow us-->
<br>
<div class="container-fluid follow-us">
    <p class="h4 text-center">FOLLOW US ON FACEBOOK</p>
</div>
<div class="row follow-photos">
    <img src="https://picsum.photos/272" class="zoom_color" alt="Slide1" style="width: 272px; height: 272px">
    <img src="https://picsum.photos/272" class="zoom_color" alt="Slide2" style="width: 272px; height: 272px">
    <img src="https://picsum.photos/272" class="zoom_color" alt="Slide3" style="width: 272px; height: 272px">
    <img src="https://picsum.photos/272" class="zoom_color" alt="Slide4" style="width: 272px; height: 272px">
    <img src="https://picsum.photos/272" class="zoom_color" alt="Slide5" style="width: 272px; height: 272px">
    <!-- <div class="col-sm follow-content">
        <img src="https://picsum.photos/250" alt="Slide1" style="width:100%">
    </div>
    <div class="col-sm follow-content">
        <img src="https://picsum.photos/250" alt="Slide2" style="width:100%">
    </div>
    <div class="col-sm follow-content">
        <img src="https://picsum.photos/250" alt="Slide3" style="width:100%">
    </div>
    <div class="col-sm follow-content">
        <img src="https://picsum.photos/250" alt="Slide3" style="width:100%">
    </div>
    <div class="col-sm follow-content">
        <img src="https://picsum.photos/250" alt="Slide3" style="width:100%">
    </div> -->
</div>

<!--Our Partnership-->


@endsection
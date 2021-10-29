@extends('client.master')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('title', 'title ne')

@section('jquery')
<script src="/js/home.js"></script>
@endsection

@section('content')

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
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center price"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product2" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center price"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product3" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center price"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product4" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center price"><strong>9.99$</strong></p>
        </div>
    </div>
</div>

<!--'Show All' Button-->
<div class="row justify-content-md-center" id="show-button">
    <button class="show-button" role="button">Show all</button>
</div>

<!--follow us-->
<br>
<div class="follow-us">
    <p class="h4 text-center">FOLLOW US ON FACEBOOK</p>
</div>
<div class="follow-slide">
    <img src="https://picsum.photos/265" alt="Slide1" style="width: 265px; height: 265px">
    <img src="https://picsum.photos/265" alt="Slide2" style="width: 265px; height: 265px">
    <img src="https://picsum.photos/265" alt="Slide3" style="width: 265px; height: 265px">
    <img src="https://picsum.photos/265" alt="Slide4" style="width: 265px; height: 265px">
    <img src="https://picsum.photos/265" alt="Slide5" style="width: 265px; height: 265px">
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

@endsection
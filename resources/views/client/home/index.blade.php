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
    <div class="col col-lg-2">
        <p class="h6 text-center text-danger">Cat Foods</p>
    </div>
    <div class="col col-md-auto">
        <p class="h6 text-center">Dog Foods</p>
    </div>
    <div class="col col-lg-2">
        <p class="h6 text-center">Pet Toys</p>
    </div>
</div>

<!--Product Photos-->
<div class="row justify-content-md-center" id="products">
    <div class="row">
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product1" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product2" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product3" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center"><strong>9.99$</strong></p>
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/230" alt="product4" style="width:100%">
            <p class="h6 text-center">Product's Name</p>
            <p class="h6 text-center"><strong>9.99$</strong></p>
        </div>
    </div>
</div>

<!--'Show All' Button-->
<div class="row justify-content-md-center" id="show-button">
    <button class="show-button" role="button">Show all</button>
</div>

@endsection
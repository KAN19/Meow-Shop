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
<div class="row justify-content-center" id="categories">
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
<div class="row justify-content-center" id="products">
    <div class="row">
        <div class="col product-content" style="text-align: center;">
            <img src="https://picsum.photos/1000/1000" alt="product1">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><strong>9.99$</strong></p>
        </div>
        <div class="col product-content" style="text-align: center;">
            <img src="https://picsum.photos/1000/1000" alt="product2">
            <p class="h6 text-center product-name">Product's Name dài ơi là dài, dài lắm lun</p>
            <p class="h6 text-center product-price"><del>9.99$</del> <strong>8.99$</strong></p>
        </div>
        <div class="col product-content" style="text-align: center;">
            <img src="https://picsum.photos/1000/1000" alt="product3">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><del>8.99$</del> <strong>8.99$</strong></p>
        </div>
        <div class="col product-content" style="text-align: center;">
            <img src="https://picsum.photos/1000/1000" alt="product4">
            <p class="h6 text-center product-name">Product's Name</p>
            <p class="h6 text-center product-price"><del>9.99$</del> <strong>8.99$</strong></p>
        </div>
    </div>
</div>

<!--'Show All' Button-->
<div class="row justify-content-center" id="show-button">
    <button class="show-button" role="button">Show all</button>
</div>

<br>
<!--OUR PARTNERS-->
<div id="partners">
    <p class="h3 text-center">Our Partners</p>
    <p class="h7 text-center">Vision, commitment, partnership</p>
</div>

<div class="row partner-photos">
    <div class="col partner-logo">
        <img src="/image/logo1.png" alt="logo1" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo2.png" alt="logo2" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class=" h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo3.png" alt="logo3" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo4.png" alt="logo4" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
</div>
<br>
<div class="row partner-photos">
    <div class="col partner-logo">
        <img src="/image/logo5.png" alt="logo5" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo6.png" alt="logo6" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo7.png" alt="logo7" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
    <div class="col partner-logo">
        <img src="/image/logo8.png" alt="logo8" style="max-width:220px; max-height: 220px; object-fit:cover">
        <p class="h6">Partner's name</p>
    </div>
</div>


<!--follow us-->
<br>
<div class="follow-us">
    <p class="h4 text-center">FOLLOW US ON FACEBOOK</p>
    <div class="follow-photos">

        <div class="follow-content ">
            <img src="https://picsum.photos/1000/1000" alt="Slide1">
        </div>
        <div class="follow-content ">
            <img src="https://picsum.photos/1000/1000" alt="Slide2">
        </div>
        <div class="follow-content ">
            <img src="https://picsum.photos/1000/1000" alt="Slide3">
        </div>
        <div class="follow-content">
            <img src="https://picsum.photos/1000/1000" alt="Slide4">
        </div>
    </div>
</div>

@endsection
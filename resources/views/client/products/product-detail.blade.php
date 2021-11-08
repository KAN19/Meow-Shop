@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/product-detail.css">

@endsection

@section('title', 'Product Detail')

@section('content')
<!--Breadcrumb-container-->
<div class="breadcrumb-container"></div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Example Product</li>
    </ol>
</nav>

<!--Product Content-->
<div class="row mt-5 ml-4">
    <div class="col-2">
        <div class="row mini-photos">
            <div class="col mini-photo">
                <img class="imageradius" src="https://picsum.photos/1100/1000" />
            </div>
            <div class="col mini-photo">
                <img class="imageradius" src="https://picsum.photos/1100/1000" />
            </div>
            <div class="col mini-photo">
                <img class="imageradius" src="https://picsum.photos/1100/1000" />
            </div>
        </div>
    </div>
    <div class="col-6 big-photo">
        <img class="imageradius" src="https://picsum.photos/1100/1000" />
    </div>
    <div class="col-4 product-description">
        <p class="h5"> <strong> Product's Name </strong> </p>
        <p class="h7">$9.99</p>
        <div class="detail-description">
            <p class="h7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore itaque qui dolor, hic commodi, perferendis iusto ea nesciunt cum dicta voluptatibus nobis consequatur asperiores mollitia eaque et? Pariatur, adipisci molestiae.</p>
        </div>
        <!-- <button class="btn"> Add to cart</button> -->
        <a href="/" class="bn3">Add to cart</a>
        <a href="/" class="bn4">Shop Now</a>
        <div class="category">
            <p class="h7"> <strong>Category:</strong> Cat food </p>
            <p></p>
        </div>
    </div>
</div>
<br>
@endsection
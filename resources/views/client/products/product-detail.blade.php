@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/product-detail.css">

@endsection

@section('title', 'Product Detail')

@section('content')
<!--Breadcrumb-container-->
<nav aria-label="breadcrumb breadcrumb--container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Example Product</li>
    </ol>
</nav>

<!-- <div class="grid-container">
    <div class="grid-item">
        <div class="mini-photos__row row ">
            <div class="mini-photo__col col">
                <img src="https://picsum.photos/1100/1000" />
            </div>
            <div class="mini-photo__col col">
                <img src="https://picsum.photos/1100/1000" />
            </div>
            <div class="mini-photo__col col">
                <img src="https://picsum.photos/1100/1000" />
            </div>
        </div>
    </div>
    <div class="grid-item">
        <img class="big-photo--imageradius" src="https://picsum.photos/1600/1000" style="max-width: 550px; max-height: 500px" />
    </div>
    <div class="grid-item">
        <p class="product-desc--name h5"> <strong> Product's Name </strong> </p>
        <p class="product-desc--price h7">$9.99</p>
        <div class="product-desc--detail">
            <p class="h7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore itaque qui dolor, hic commodi, perferendis iusto ea nesciunt cum dicta voluptatibus nobis consequatur asperiores mollitia eaque et? Pariatur, adipisci molestiae.</p>
        </div>
        <br>
        <a href="/" class="btn btn--addCart">Add to cart</a>
        <a href="/" class="btn btn--buyNow">Buy Now</a>
        <div class="product-desc--category">
            <p class="product-desc__h7 h7">
                <strong>Category:</strong>
                <span class="product-desc__h7--name"> Cat food</span>
            </p>
            <p class="product-desc__h7 h7">
                <strong>Tags:</strong>
                <span class="product-desc__h7--name"> Cat food,</span>
                <span class="product-desc__h7--name"> Diet food,</span>
                <span class="product-desc__h7--name"> Oganic food</span>
            </p>
        </div>
    </div>
</div> -->

<!--Product Content-->
<div class="prod-content">
    <div class="prod-content__row row mt-5 ml-4">
        <div class="prod-content__col--mini col-2">
            <div class="mini-photos__row row ">
                <div class="mini-photo__col col">
                    <img src="https://picsum.photos/1100/1000" />
                </div>
                <div class="mini-photo__col col">
                    <img src="https://picsum.photos/1100/1000" />
                </div>
                <div class="mini-photo__col col">
                    <img src="https://picsum.photos/1100/1000" />
                </div>
            </div>
        </div>
        <div class="prod-content__col--big col-6 ">
            <img class="big-photo--imageradius" src="https://picsum.photos/1600/1000" />
        </div>
        <!--Product Description-->
        <div class="product-desc__col col-4">
            <p class="product-desc--name h5"> <strong> Product's Name </strong> </p>
            <p class="product-desc--price h7">$9.99</p>
            <div class="product-desc--detail">
                <p class="h7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore itaque qui dolor, hic commodi, perferendis iusto ea nesciunt cum dicta voluptatibus nobis consequatur asperiores mollitia eaque et? Pariatur, adipisci molestiae.</p>
            </div>
            <br>
            <!-- <button class="btn"> Add to cart</button> -->
            <a href="/" class="btn btn--addCart">Add to cart</a>
            <a href="/" class="btn btn--buyNow">Buy Now</a>
            <div class="product-desc--category">
                <p class="product-desc__h7 h7">
                    <strong>Category:</strong>
                    <span class="product-desc__h7--name"> Cat food</span>
                </p>
                <p class="product-desc__h7 h7">
                    <strong>Tags:</strong>
                    <span class="product-desc__h7--name"> Cat food,</span>
                    <span class="product-desc__h7--name"> Diet food,</span>
                    <span class="product-desc__h7--name"> Oganic food</span>
                </p>
            </div>
        </div>
    </div>
</div>

<!--CHI TIẾT SẢN PHẨM-->
<div class="product-detail__row row mt-5 ml-4">
    <div class="product-detail__col--des col col-sm-9">
        <div class="product-detail--title">
            <h4>Product Details</h5>
        </div>
        <table class="desc-table">
            <tr>
                <td>Category</td>
                <td>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Meow Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cat Food</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>
                    <ol class="breadcrumb">Whiskas </ol>
                </td>
            </tr>
            <tr>
                <td>Place of Origin</td>
                <td>
                    <ol class="breadcrumb">America </ol>
                </td>
            </tr>
            <tr>
                <td>Food Form</td>
                <td>
                    <ol class="breadcrumb">Dry Food </ol>
                </td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>
                    <ol class="breadcrumb">1.05kg </ol>
                </td>
            </tr>
        </table>
        <div class="product-detail--title">
            <h4>Product Description</h5>
        </div>
        <div class="product-detail--desc">
            <h5>Description</h5>
            <p>True Acre Foods Farmhouse Blend Large Breed Food is crafted with wholesome
                proteins, veggies and specialized nutrients to support the health of your large breed dog. Glucosamine and chondroitin help support joint health, while balanced levels of calcium and phosphorus support healthy bone development in large breed dogs. With natural fiber and prebiotics to support digestion and all the nutrients your dog needs to thrive, it’s the nutrition you can be proud to serve. And you can be sure they’ll keep coming back for more with delicious chicken as the first ingredient and tender, meaty morsels for a meal they’ll crave.</p>
            <h5>Key Benefit</h5>
            <p>
            <ul>
                <li>
                    Large breed recipe is specially formulated to support the unique needs of large breed dogs.</li>
                <li>
                    Supports joint health with glucosamine and chondroitin, plus balanced levels of calcium and phosphorus to support healthy bone development.</li>
                <li>
                    Natural fiber and prebiotics to help maintain digestive health, and taurine to support a healthy heart.
                </li>
                <li>Protein-rich, tender morsels bring the taste dogs crave, with real chicken as the first ingredient.</li>
                <li>Crafted in the USA with the world’s best ingredients.</li>
            </ul>
            </p>
        </div>

    </div>
    <!--TRENDING PRODUCT-->
    <div class="product-detail__col--trending col col-sm-2">
        <div class="trending-product--title">
            <h5>Trending Products</h5>
        </div>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
        <div class="trending-product__row row">
            <img class="imageradius" src="https://picsum.photos/150" />
            <div class="trending-product--content">
                <div>Name</div>
                <div><strong>$9.99</strong></div>
            </div>
        </div>
        <hr>
    </div>
</div>
<!--Related Products-->
<div class="related-prod">
    <div class="related-prod__h3">
        <p class="h3 text-center">Related Products</p>
    </div>
    <div class="related-prod__row row justify-content-center">
        <div class="row">
            <div class="related-prod__col col">
                <img src="https://picsum.photos/1000/1000" alt="product1">
                <p class="related-prod__h6--name h6 text-center">Product's Name</p>
                <p class="related-prod__h6--price h6 text-center"><strong>9.99$</strong></p>
            </div>
            <div class="related-prod__col col">
                <img src="https://picsum.photos/1000/1000" alt="product2">
                <p class="related-prod__h6--name h6 text-center">Product's Name</p>
                <p class="related-prod__h6--price h6 text-center"><del>9.99$</del> <strong>8.99$</strong></p>
            </div>
            <div class="related-prod__col col">
                <img src="https://picsum.photos/1000/1000" alt="product3">
                <p class="related-prod__h6--name h6 text-center">Product's Name</p>
                <p class="related-prod__h6--price h6 text-center"><del>8.99$</del> <strong>8.99$</strong></p>
            </div>
            <div class="related-prod__col col">
                <img src="https://picsum.photos/1000/1000" alt="product4">
                <p class="related-prod__h6--name h6 text-center">Product's Name</p>
                <p class="related-prod__h6--price h6 text-center"> <strong>8.99$</strong></p>
            </div>
        </div>
    </div>
</div>
@endsection
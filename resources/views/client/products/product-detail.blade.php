@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/product-detail.css">

@endsection

@section('title', 'Product Detail')
@section('content')
<!-------------breadcrumb------------->
<nav aria-label="breadcrumb breadcrumb--container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Example Product</li>
    </ol>
</nav>
<!----------Product Content---------->
<div class="prod-content container-fluid">
    <div class="prod-content__row row justify-content-center">
        <!--3 Mini Photos -->
        <div class="mini-photos__warrper col-md-2">

            <img id="slideLeft" class="arrow" src="{{url('/utility/arrow-left.png')}}">
            <img id="slideTop" class="arrow" src="{{url('/utility/arrow-top.png')}}">

            <?php 
            // listimage ban dau la Json -> array
            $imagesArr = json_decode($product->list_image);
            
            ?>
            <div class="mini-photos__row  ">
                <div class="mini-photo__col ">
                    {{-- Cai anh dai dien san pham --}}
                    <img class="thumbnail active" src=" {{url('/') . $product->image}}" alt="">
                </div>
                @if ($imagesArr)
                @foreach ($imagesArr as $image)
                <div class="mini-photo__col ">
                    <img class="thumbnail active" src=" {{url('/') . $image}}" alt="">
                </div>
                @endforeach
                @else
                <div class="mini-photo__col ">
                    <img class="thumbnail active" src=" {{url('/') . $imagesArr}}" alt="">
                </div>
                @endif

            </div>

            <img id="slideRight" class="arrow" src="{{url('/utility/arrow-right.png')}}">
            <img id="slideBottom" class="arrow" src="{{url('/utility/arrow-bottom.png')}}">

        </div>

        <!-- Big Photo -->
        <div class="prod-content__col--big col-md-6 ">
            <img class="big-photo--imageradius featured" src={{url('/') . $product->image}} />
        </div>

        <!--Short Product Description-->
        <div class="product-desc__col col-md-4">
            <p class="product-desc--name h5"> <strong> {{$product->name}} </strong> </p>
            @if ($product->discount > 0)
            <del lass="h7">${{$product->price - $product->price * $product->discount}}</del>
            <strong class="product-desc--price h7">${{$product->price}}</strong>
            @else
            <span class="product-desc--price h7">${{$product->price}}</span>
            @endif
            <div class="product-desc--detail">
                <p class="h7">{{$product->short_description}}</p>
            </div>
            <br>
            <!-- 2 Buttons -->
            <a href={{route('add-cart', $product->id)}} class="btn btn--addCart">Add to cart</a>
            <a href="/" class="btn btn--buyNow">Buy Now</a>
            <!-- Categories & Tags-->
            <div class="product-desc--category">
                <p class="product-desc__h7 h7">
                    <strong>Category:</strong>
                    <span class="product-desc__h7--name">{{$product->category->name}}</span>
                </p>
                {{-- <p class="product-desc__h7 h7">
                    <strong>Tags:</strong>
                    <span class="product-desc__h7--name"> Cat food,</span>
                    <span class="product-desc__h7--name"> Diet food,</span>
                    <span class="product-desc__h7--name"> Oganic food</span>
                </p> --}}
            </div>
        </div>
    </div>
</div>

<!--------Detail description------------>
<div class="product-detail__row row mt-5 ml-4">
    <div class="product-detail__col--des col col-sm-9">

        <div class="product-detail--title">
            <h4>Product Description</h5>
        </div>
        <!-- detail description p -->
        <div class="product-detail--desc">
            {!!$product->description!!}
        </div>

    </div>
    <!--Trending Product-->
    <div class="product-detail__col--trending col col-md-3">

        <div class="trending-product--title">
            <h5>Trending Products</h5>
        </div>

        <div class="trending-product">
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
</div>
<!-----------Related Products-------------->
<div class="related-prod">
    <!-- title -->
    <div class="related-prod__h3">
        <p class="h3 text-center">Related Products</p>
    </div>
    <!-- Related product's content -->
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


@section('javascript')
<script src="/js/client/product-detail.js"> </script>
@endsection
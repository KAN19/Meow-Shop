@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/resultsearch.css">

@endsection

@section('title', 'Product')

@section('content')
<div class=".container-fluid">
    <div class="banner">
        <div class="banner__title">YOUR RESULT SEARCH</div>
    </div>
    <h1 class="title__search">SEARCH: QUANTITY RESULTS FOUND FOR "PRODUCT NAME"</h1>
    <div class="row">
        <!-- product cot ben trai -->
        <div class="col-md body__productsearch">
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
            <!-- san pham hang 2 -->
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
            <!-- san pham hang 3 -->
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
        </div>
        <!-- product cot ben phai -->
        <div class="col-md body__productsearch">
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
            <!-- san pham hang 2 -->
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
            <!-- san pham hang 3 -->
            <div class="border__productsearch">
                <div class="row product_search">
                    <!-- product image -->
                    <div class="product__search--image col-sm"> 
                        <img class="search__image--radius" src="https://picsum.photos/200/150"/>
                    </div>
                    <div class="product__search--detail col-sm">
                        <!-- product name -->
                        <b class="search__detail--name">Product name</b>
                        <!-- product price -->
                        <div class="search__detail--price">
                            <del>9.99$</del> <strong>8.99$</strong>
                        </div><br>               
                        <!-- btn add to cart -->
                        <div class="search__detail--btn">                
                            <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                        </div>
                    </div>          
                </div>        
            </div>
        </div>       
    </div> 
    <!-- nut next -->
        <div class="seach__nextpage">
            <div class="search__pagination">                                              
                <a href="#" class="active mr-3">1</a>
                <a href="#">2</a>       
                <i class="arrow right" id="arrowtest"></i>              
            </div>
        </div>

</div>
@endsection

@section('javascript')

@endsection
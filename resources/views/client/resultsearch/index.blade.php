@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/resultsearch.css">

@endsection

@section('title', 'Product')

@section('content')

<div class=".container-fluid">
    <img id="banner_resultsearch" src="/image/banner_resultsearch.png">
    <div class="inputWithIcon_search">
        <form method="POST" action="./resultsearch" >                          
            <input  placeholder="Search...." class="searchbtn_search py-1 border" id="searchbtn_search" name="searchbtn_search"> 
            @csrf
            <i class="fa fa-search" aria-hidden="true"></i>                            
        </form>
       
    </div> 
    @if($data==null)
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
     @else
          
        <h1 class="title__search">SEARCH: QUANTITY RESULTS FOUND FOR "{{$search_name}}"</h1>
    
        @foreach ($data as $key => $value )
     
        <div class="row">        
            <!-- product cot ben trai -->
            <div class="col-md body__productsearch">
                <div class="border__productsearch">
                    <div class="row product_search">
                        <!-- product image -->
                        <div class="product__search--image col-sm-4"> 
                            {{-- <img class="search__image--radius" src={{url('/') . $value->image}} />     --}}   
                            {{-- <img class="search__image--radius"src={{url('/') . $value->image}} />   --}} 
                            <div>{{url('/') . $value->image}}}</div>                
                        </div>
                        <div class="product__search--detail col-sm">
                            <!-- product name -->
                            <b class="search__detail--name">{{$value->name}}</b>
                            <!-- product price -->
                            {{-- <div class="search__detail--price">
                                <del>{{$value['price']}}</del> <strong>{{$value['discount']}}</strong>
                            </div><br>  --}}
                            <div>
                                @if ($value->discount > 0)
                                    <del class="margimobile">{{$value->price}}</del> <strong>{{$value->price - $value->price * $value->discount}}</strong>                                    
                                @else
                                    <strong>{{$value->price}}</strong>
                                @endif
                            </div>   <br>           
                            <!-- btn add to cart -->
                            <div class="search__detail--btn">                
                                <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                            </div>
                        </div>          
                    </div>        
                </div>              
            </div> 
           {{--  <div class="col-md body__productsearch">
                <div class="border__productsearch">
                    <div class="row product_search">
                        <!-- product image -->
                        <div class="product__search--image col-sm-4"> 
                            <img class="search__image--radius" src={{url( $value['image'])}} />                           
                        </div>
                        <div class="product__search--detail col-sm">
                            <!-- product name -->
                            <b class="search__detail--name">{{$value['name']}}</b>
                            <!-- product price -->
                            <div class="search__detail--price">
                                <del>{{$value['price']}}</del> <strong>{{$value['discount']}}</strong>
                            </div><br>               
                            <!-- btn add to cart -->
                            <div class="search__detail--btn">                
                                <button type="button" class="detail__btn--cart">Add to Cart</button>                 
                            </div>
                        </div>          
                    </div>        
                </div>             
            </div> --}}
        </div>
        @endforeach        
     @endif   
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

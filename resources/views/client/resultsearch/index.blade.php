@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/resultsearch.css">

@endsection

@section('title', 'Product')

@section('content')

<div class=".container-fluid">
    <img id="banner_resultsearch" src="/image/banner_resultsearch.png">
     @if($search_name==null)
        <h1 class="title__search_first">HELLO! THIS IS SEARCH PAGE</h1>
        <div class="title__search_second">You can search everything in here</div>
        <div class="inputWithIcon_search_datanull inputWithIcon_both">
            <form method="POST" action="./resultsearch" >                          
                <input  placeholder="Search...." class="searchbtn_search py-1 border" id="searchbtn_search" name="searchbtn_search"> 
                @csrf
                <i class="fa fa-search" aria-hidden="true"></i>                            
            </form>       
        </div>     
    @else
        <div class="inputWithIcon_search inputWithIcon_both">
            <form method="POST" action="./resultsearch" >                          
                <input  placeholder="Search...." class="searchbtn_search py-1 border" id="searchbtn_search" name="searchbtn_search"> 
                @csrf
                <i class="fa fa-search" aria-hidden="true"></i>                            
            </form>       
        </div> 
            <h1 class="title__search">SEARCH: QUANTITY RESULTS FOUND FOR "{{$search_name}}"</h1>
    
        @foreach ($data as $key => $value )
            <div class="row">                        
                <div class="col-md body__productsearch">
                    <div class="border__productsearch">
                        <div class="row product_search">
                            <!-- product image -->
                            <div class="product__search--image col-sm-4"> 
                                <img class="search__image--radius" src={{url('/') . $value->image}} />                                                                             
                            </div>
                            <div class="product__search--detail col-sm">
                                <!-- product name -->
                                <b class="search__detail--name">{{$value->name}}</b>                           
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
            </div>
        @endforeach      
        <div class="seach__nextpage">
            <div class="search__pagination">                                              
                <a href="#" class="active mr-3">1</a>
                <a href="#">2</a>       
                <i class="arrow right" id="arrowtest"></i>              
            </div>
        </div>  
     @endif   
     
</div>


@endsection

@section('javascript')

@endsection

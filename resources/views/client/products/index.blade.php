@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/products.css">

@endsection

@section('title', 'Product')

@section('content')
<div class=".container-fluid">
    <div class="shop">
        <!-- banner     -->
        <img id="banner" src="/image/banner2.png">  
        <!-- thanh dieu huong -->  
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" >
                <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>         
    </div> 
    </div>    
    <!-- search button -->
    <div class ="row mt-5 ml-4">
        <div class="col-sm-3">             
            <div class="ml-2">    
                <div class="inputWithIcon">
                    <div>                          
                        <input type="text" placeholder="Search...." class="searchbtn py-1 border" id="searchbtn"> 
                        <i class="fa fa-search" aria-hidden="true"></i>                            
                    </div>
                </div>  
            </div>                                         
            <br>
            <!-- categorties -->
            <div class="categorties ml-2">
                <div class="titleCategorties mb-3 font-weight-bold">Categories</div>
                <div class="contentCategorties">
                    <div class="content mb-2">Cat Food</div>
                    <div class="content mb-2">Dog Food</div>
                    <div class="content">Pet Toys</div> 
                </div>                    
            </div>
            <span class="custom-dropdown small" >
                <div class="titleCategorties-mobile mb-3 font-weight-bold">Categories</div>
                    <select id="selectboxcategories">                    
                        <option>Cat Food</option>
                        <option>Dod Food</option>  
                        <option>Pet Toys</option>                   
                    </select>
            </span>
            <!--Trending product-->
            <div class="trending mt-4 ml-2">
                <div class="titleTrending mb-3 font-weight-bold">
                    Trending product
                </div>
                <!--trending product 1-->
                <div class="trendingproduct name">
                    <div class="trendingname row">
                        <div>                        
                            <div><img class="imageradius" src="https://picsum.photos/150"/></div>
                        </div>
                        <div class="contentTrending">
                            <div>Name</div>
                            <div>$99.00</div>
                        </div>                                       
                    </div>        
                    <hr class="my-3">  
                    <!--trending product 2-->  
                    <div class="trendingname row">
                        <div>                        
                            <div><img class="imageradius" src="https://picsum.photos/150"/></div>
                        </div>
                        <div class="contentTrending">
                            <div>Name</div>
                            <div>$99.00</div>
                        </div>                                       
                    </div>      
                    <hr class="my-3 ">   
                    <!--trending product 3-->   
                    <div class="trendingname row">
                        <div>                        
                            <div><img class="imageradius" src="https://picsum.photos/150"/></div>
                        </div>
                        <div class="contentTrending">
                            <div>Name</div>
                            <div>$99.00</div>
                        </div>                                       
                    </div>    
                    <hr class="my-3 "> 
                    <!--trending product 4-->  
                    <div class="trendingname row">
                        <div>                        
                            <div><img class="imageradius" src="https://picsum.photos/150"/></div>
                        </div>
                        <div class="contentTrending">
                            <div>Name</div>
                            <div>$99.00</div>
                        </div>                                       
                    </div>      
                </div>                                           
            </div>           
        </div>

        <!---product-->
        <div class="col-sm-9">
            <br><br>
            <div class="grid-container">                
                <!--div col 1></!--div-->                
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2">Product Name</div>
                    </div>             
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                       
                </div>
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product"  src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>      
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                 
                </div>  
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product"  src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>   
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                     
                </div>               
              
                <!--div col 2></!--div-->                
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                    
                </div>
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>    
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                     
                </div>  
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>  
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                     
                </div>             
                 <!--div col 3></!--div-->                
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>  
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                    
                </div>
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div>        
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                 
                </div> 
                <div class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/1000/1000"/>
                        <div class="productname text-center mt-2"> Product Name</div>
                    </div> 
                    <div>
                        <del class="margimobile">9.99$</del> <strong>8.99$</strong>
                    </div>                                                                     
                </div>            
            </div>  
            <!--Next page-->        
            <div class="nextpage">
                <div class="pagination">                                              
                    <a href="#" class="active mr-3">1</a>
                    <a href="#">2</a>       
                    <i class="arrow right"></i>              
                </div>
            </div>
        </div>       
    </div>
    <!-- trending product mobile -->
        <div class="mobiletrending mt-2">
            <div class="titleTrending-mobile mb-3 font-weight-bold">
                Trending product
            </div>
            <!--trending product 1-->
            <div class="trendingproduct name">
                <div class="row trendingname">
                    <div class="col-sm">                        
                        <div><img class="imageTrending-mobile" src="https://picsum.photos/350/250"/></div>
                    </div>
                    <div class="trendingmobile col-sm mt-4">
                        <div class="mb-1">Name</div>
                        <div>$99.00</div>
                    </div>                                       
                </div>        
                <hr class="my-3 ">  
                <!--trending product 2-->  
                <div class="row trendingname">
                    <div class="col-sm">                        
                        <div><img class="imageTrending-mobile" src="https://picsum.photos/350/250"/></div>
                    </div>
                    <div class="trendingmobile col-sm mt-4">
                        <div class="mb-1">Name</div>
                        <div>$99.00</div>
                    </div>                                       
                </div>      
                <hr class="my-3 ">   
                <!--trending product 3-->   
                <div class="row trendingname">
                    <div class=" col-sm">                        
                        <div><img class="imageTrending-mobile" src="https://picsum.photos/350/250"/></div>
                    </div>
                    <div class="trendingmobile col-sm mt-4">
                        <div class="mb-1">Name</div>
                        <div>$99.00</div>
                    </div>                                       
                </div>    
                <!--trending product 4--> 
                <hr class="my-3 ">    
                <div class="row trendingname mb-5">
                    <div class="col-sm">                        
                        <div><img class="imageTrending-mobile" src="https://picsum.photos/350/250"/></div>
                    </div>
                    <div class="trendingmobile col-sm mt-4">
                        <div class="mb-1">Name</div>
                        <div>$99.00</div>
                    </div>                                       
                </div>      
            </div>                                           
        </div> 
</div>
@endsection

@section('javascript')

@endsection
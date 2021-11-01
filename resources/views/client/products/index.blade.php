@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/products.css">

@endsection

@section('title', 'Product')

@section('content')
<div class=".container-fluid">
    <div class="shop">
        <p class="h2 text-center">Shop</p>
        <div>
            <a class="url pl-5">Home/Cart/Shop</a>
        </div>
    </div>    
        <div class ="row mt-5 ml-4">
            <div class="col-sm-2 col-md-offset-2">             
                <div class="bg-white rounded ml-4">
                    <form action="">
                        <div class="bg-light rounded rounded-pill shadow-sm">
                            <div class="input-group">
                                <input type="search" placeholder="Search product?"class="form-control border-0 bg-light">
                                <span class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link text-secondary"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>                            
                <br>
                <div class="categorties ml-4">
                <div class="mb-3 font-weight-bold">Categories</div>
                    <div class="content categorties">
                        <div class="image1 mb-2">Cat Food</div>
                        <div class="image2 mb-2">Dog Food</div>
                        <div class="image3">Pet Toys</div> 
                    </div>
                    
                </div>
                <!--Trending product-->
                <div class="trendingproduct mt-4 ml-4">
                    <div class="mb-3 font-weight-bold">
                        Trending product
                    </div>
                    <!--trending product 1-->
                    <div class="trendingproduct name">
                        <div class="row">
                            <div class="col-sm trendingname">                        
                                 <div><img src="https://picsum.photos/100?grayscale"/></div>
                            </div>
                            <div class="productname col-sm mt-4">
                                <div class="name trending mb-1">Name</div>
                                <div>$99.00</div>
                            </div>                                       
                        </div>   
                        <hr class="my-3 ">  
                        <!--trending product 2-->  
                        <div class="row">
                                <div class="col-sm trendingname">                        
                                    <div><img src="https://picsum.photos/100?grayscale"/></div>
                                </div>
                                <div class="productname col-sm mt-4">
                                    <div class="name trending mb-1">Name</div>
                                    <div>$99.00</div>
                                </div>                                       
                            </div>   
                        <hr class="my-3 ">   
                        <!--trending product 3-->   
                        <div class="row">
                                <div class="col-sm trendingname">                        
                                    <div><img src="https://picsum.photos/100?grayscale"/></div>
                                </div>
                                <div class="productname col-sm mt-4">
                                    <div class="name trending mb-1">Name</div>
                                    <div>$99.00</div>
                                </div>                                       
                            </div>   
                        <hr class="my-3 ">      
                        <div class="row">
                                <div class="col-sm trendingname">                        
                                    <div><img src="https://picsum.photos/100?grayscale"/></div>
                                </div>
                                <div class="productname col-sm mt-4">
                                    <div class="name trending">Name</div>
                                    <div>$99.00</div>
                                </div>                                       
                        </div>     
                    </div>                                           
                </div>           
            </div>

            <!---product-->
            <div class="col-sm-10 box">
                <br><br>
                <div class="row">                
                    <!--div col 1></!--div-->
                    <div class="col-sm text-center">
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>   
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>
                        </div>                
                    </div>
                    <!--div col 2></!--div-->
                    <div class="col-sm text-center">
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>   
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>
                        </div>                
                    </div>
                    <!--div col 3></!--div-->
                    <div class="col-sm text-center">
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>                        
                        </div>   
                        <div class="mb-4">
                            <div class="imageproduct"><img src="https://picsum.photos/350/250?grayscale"/></div>
                            <div class="productname text-center mt-2"> Product Name
                                <div>$99.00</div>
                            </div>
                        </div>                
                    </div>
                </div>  
                <!--Next page-->         
                <div class="next mt-2 text-center ">
                    <a class="page1">1</a>&emsp;&emsp;
                    <a class="page2">2</a>&emsp;&emsp;
                    <i class="fas fa-arrow-right"></i>
                    <br><br><br>
                </div> 
            </div>       
        </div>
</div>
@endsection

@section('javascript')

@endsection
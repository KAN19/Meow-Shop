@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/shoppingcart.css">

@endsection

@section('title', 'Product')

@section('content')
<div class=".container-fluid">
    <div class="banner">
        <div class="banner__name">
            <div class="banner__name--size">CART</div>
        </div>
        <!-- thanh dieu huong -->  
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" >
                <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>         
    </div> 
    <h1 class="text-center mb-5">YOUR CART ITEMS</h1>
    <!-- tieu de -->
    <div class="cart row p-3 mb-2">
        <div class="cart__product col-sm-3">
            Product
        </div>
        <div class="cart__name col-sm-3">
            Name
        </div>
        <div class="cart__price col-sm-2">
            Price
        </div>
        <div class="cart__quanlity col-sm-2">
            Quanlity
        </div>
        <div class="cart__subtotal col-sm-1">
            Subtotal
        </div>
        <div class="col-sm-1">
        </div>       
    </div>
    <!-- san pham -->
    <!-- san pham 1 -->
    <div class="row product">
        <div class="product__set col-sm-3">
            <i class="container">
                <input type="checkbox" id="c2" value=""><label class="label__checkbox" for="c2"><span class="span__checkbox"></span></label>
            </i>
            <img class="product__set--image" src="https://picsum.photos/200/150"/>
        </div>
        <div class="product__name col-sm-3">
            <a class="product--name">Product Name</a>
        </div>
        <div class="product__price col-sm-2">
            <del>9.99$</del> <strong>8.99$</strong>
        </div>
        <div class="product__quanlity col-sm-2">
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                <input class="plus is-form" type="button" value="+">
            </div>            
        </div>
        <div class="product__subtotal col-sm-1">
            $9.99
        </div>       
        <div class="btn__bin col-sm-1">
            <i class="bin--icon fa fa-trash" aria-hidden="true"></i>
        </div>
    </div>    
    <hr class="line my-3">   
    <!-- san pham 2 -->
    <div class="row product">
        <div class="product__set col-sm-3">
            <i class="container">
                <input type="checkbox" id="c2" value=""><label class="label__checkbox" for="c2"><span class="span__checkbox"></span></label>
            </i>
            <img class="product__set--image" src="https://picsum.photos/200/150"/>
        </div>
        <div class="product__name col-sm-3">
            <a class="product--name">Product Name</a>
        </div>
        <div class="product__price col-sm-2">
            <del>9.99$</del> <strong>8.99$</strong>
        </div>
        <div class="product__quanlity col-sm-2">
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                <input class="plus is-form" type="button" value="+">
            </div>            
        </div>
        <div class="product__subtotal col-sm-1">
            $9.99
        </div>       
        <div class="btn__bin col-sm-1">
            <i class="bin--icon fa fa-trash" aria-hidden="true"></i>
        </div>
    </div>    
    <hr class="line my-3">   
    <!-- san pham 3 -->
    <div class="row product">
        <div class="product__set col-sm-3">
            <i class="container">
                <input type="checkbox" id="c2" value=""><label class="label__checkbox" for="c2"><span class="span__checkbox"></span></label>
            </i>
            <img class="product__set--image" src="https://picsum.photos/200/150"/>
        </div>
        <div class="product__name col-sm-3">
            <a class="product--name">Product Name</a>
        </div>
        <div class="product__price col-sm-2">
            <del>9.99$</del> <strong>8.99$</strong>
        </div>
        <div class="product__quanlity col-sm-2">
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                <input class="plus is-form" type="button" value="+">
            </div>            
        </div>
        <div class="product__subtotal col-sm-1">
            $9.99
        </div>       
        <div class="btn__bin col-sm-1">
            <i class="bin--icon fa fa-trash" aria-hidden="true"></i>
        </div>
    </div>    
    <hr class="line my-3 ">s
    <div class="row btn__cart">
        <div class="col-sm">
            <div class="container overlay__btn">
                <button type="button" class="btn continue--btn">Continue Shopping</button>
                <i class="overlay overlay__btn--continue fa fa-shopping-cart" aria-hidden="true"></i>
            </div>   
        </div>     
        <div class="col-sm btn__cart--clear">
            <button type="button" class="btn clear--btn">Clear Shopping Cart</button>
        </div>
    </div>
    <hr class="line my-3 ">
    <div class="container-fluid">
        <p class="carttotal">Cart Total</p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Subtotal</th>
                    <td>$35.98</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th>Shipping</th>
                    <td>COD - Cash On Delivery</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th>Total</th>
                    <td>$35.98</td>
                </tr>
            </tbody>
        </table>
        <div class="checkout">
             <button type="button" class="btn checkout--btn">Procceed to Checkout</button>
        </div>       
    </div>
  
</div>
    
    
@endsection

@section('javascript')

@endsection
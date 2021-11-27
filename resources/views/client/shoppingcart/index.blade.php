@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/shoppingcart.css">

@endsection

@section('title', 'Product')

@section('content')
<div class=".container-fluid">
    <!-- <div class="banner"> -->
    <div class="banner">
        <div class="banner__title">CART</div>
    </div>
    <!-- thanh dieu huong -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ml-5"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
    </nav>
    <!-- </div> -->
    <h3 class="text-center mb-5">YOUR CART ITEMS</h3>
    <!-- tieu de -->
    <div class="cart__container">
        <div class="cart row p-3 mb-2">
            <div class="cart__title  col-md-2">
                Image
            </div>
            <div class="cart__title  col-md-3">
                Name
            </div>
            <div class="cart__title col-md-2">
                Price
            </div>
            <div class="cart__title col-md-2">
                Quantity
            </div>
            <div class="cart__title col-md-2">
                Subtotal
            </div>
            <div class="cart__title col-md-1">Delete</div>
        </div>


        <div class="row ">
            <div class="product__set col-md-2">
                <img class="product__set--image" id="image" src="https://picsum.photos/300/130" />
            </div>
            <div class="product__name col-md-3">
                <a class="product--name">Product Name</a>
            </div>
            <div class="product__price col-md-2">
                <del>9.99$</del> <strong>8.99$</strong>
            </div>
            <!-- quanlity -->
            <div class="product__quanlity col-md-2">
                <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                    <input class="plus is-form" type="button" value="+">
                </div>
            </div>
            <div class="product__subtotal col-md-2">
                $9.99
            </div>
            <!-- icon bin -->
            <div class="btn__bin col-md-1">
                <i class="bin--icon fa fa-trash" aria-hidden="true"></i>
            </div>
        </div>
        <hr class="line my-3 ">
        <div class="row btn__cart ">
            <div class="overlay__btn">
                <button type="button" class="btn continue--btn">Continue Shopping</button>
            </div>
            <div class="overlay__btn">
                <button type="button" class="btn clear--btn">Clear Shopping Cart</button>
            </div>
        </div>
        <!--  table cart total -->
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
            <!-- btn checkout -->
            <div class="btn__cart">
                <div class="overlay__btn">
                    <button type="button" class="btn checkout--btn">Procceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('javascript')

@endsection
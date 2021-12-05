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
        <?php 
            $myCart = $cart->items; 
        ?>
       
        @if (count($myCart) > 0)
           
            @foreach ($myCart as $item)
            {{-- @dd($item) --}}
            <div class="row ">
                <div class="product__set col-md-2">
                    <a href="#"> <img class="product__set--image" id="image" src={{$item['image']}} />
                    </a>
                </div>
    
                <div class="product__property product__name col-md-3">
                    <a href="#">{{$item['name']}}</a>
                </div>
                @if ($item['discount'] > 0)
                    <div class="product__property col-md-2">
                        <del class="mr-2">${{$item['price']}}</del> <strong>${{$item['finalPrice']}}</strong>
                    </div>
                @else
                <div class="product__property col-md-2">
                    <div>$${{$item['price']}}</div>
                </div>
                @endif
               
    
                <!-- quanlity -->
                <div class="product__property col-md-2">
                    <div class="buttons_added">
                        <input class="minus is-form" type="button" value="-" onclick="DecreaseQuantity()">
                        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value={{$item['quantity']}}>
                        <input class="plus is-form" type="button" value="+" onclick="IncreaseQuantity()">
                    </div>
                </div>
    
                <div class="product__property col-md-2">
                    ${{$item['finalPrice'] * $item['quantity']}}
                </div>
    
                <!-- icon bin -->
                <div class="product__property btn__bin col-md-1">
                    <i class="bin--icon fa fa-trash" aria-hidden="true"></i>
                </div>
    
            </div>
            @endforeach
        @else
            
        @endif
        
        <hr class="line my-3 ">
        <div class="row btn__cart ">
            <div class="overlay__btn">
                <button type="button" class="btn__main continue--btn">
                    <a href="#">Continue Shopping</a>
                </button>
            </div>
            <div class="overlay__btn">
                <button type="button" class="btn__main clear--btn">
                    <a href="#">Update Cart</a>
                </button>
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
                        <td>${{$cart->total_price}}</td>
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
                        <td>${{$cart->total_price}}</td>
                    </tr>
                </tbody>
            </table>
            <!-- btn checkout -->
            <div class="btn__cart">
                <div class="overlay__btn">
                    <button type="button" class="btn__main checkout--btn">Procceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('javascript')
<script>
let quantity = $('.input-qty').attr('value')

const DecreaseQuantity = () => {
    if (Number(quantity) - 1 > 0) {
        quantity = Number(quantity) - 1;
        $('.input-qty').attr('value', quantity);
    }
}

const IncreaseQuantity = () => {
    quantity = Number(quantity) + 1;
    $('.input-qty').attr('value', quantity);
}
</script>
@endsection
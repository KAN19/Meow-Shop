@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/checkout.css">

@endsection

@section('title', 'Checkout')

@section('content')
<div class=".container-fluid">
    <!-- banner -->
    <div class="banner">
        <div class="banner__name">
            <div class="banner__name--size">CHECKOUT</div>
        </div>
    </div>
    <!-- body checkout -->
    <!-- =========Form method here======= -->
    <form action="{{route('store-checkout')}}" method="post">
        @csrf
        <div class="row checkout__page">
            <!-- =====Left-bill infor==== -->
            <div class="col-md-6">
                <div class="section__title">Bill Detail</div>
                <!-- email input -->
                <div class="input__field">
                    <div class="input__field__title">Your email*</div>

                    <input type="text" name="ord_email" placeholder="Your Email" value="{{old('ord_email')}}" required>
                    @error('ord_email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <!-- Name -->
                <div class="input__field">
                    <div class="input__field__title">Your name*</div>

                    <input type="text"name="ord_customer" placeholder="Your name" value="{{old('ord_customer')}}" required>

                    @error('ord_customer')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- select country -->
                <div class="input__field">
                    <div class="input__field__title">Province/City*</div>

                    <select class="input__field__selector"  name="ord_province">
                        <option value="Ha Noi">Hà Nội</option>
                        <option value="TP. Ho Chi Minh">Thành phố Hồ Chí Mính</option>
                        <option value="Cambodia">Đà Nẵng</option>
                        <option value="America">Huế</option>
                        <option value="China">Cần Thơ</option>
                    </select>

                </div>
                <!-- street address -->
                <div class="input__field">
                    <div class="input__field__title">Street Address*</div>

                    <input type="text" name="ord_address" placeholder="Street Address" value="{{old('ord_address')}}">

                    @error('ord_address')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input__field">
                    <div class="input__field__title">Phone*</div>

                    <input type="text" name="ord_phone" placeholder="Phone" value="{{old('ord_phone')}}">

                    @error('ord_phone')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input__field">
                    <div class="input__field__title">Order note (optional)</div>

                    <textarea class="input__field__textarea" 
                    name="ord_note" placeholder="Write something">{{old('ord_note')}}</textarea>

                </div>
            </div>


            <!-- Your order -->
            <div class="col-md-6 mb-5">
                <div class="section__title">Your Order</div>
                <div class="border__order">
                    <!-- product and subtotal -->
                    <div class=" body__order__row ">
                        <!-- dong product va subtotal -->
                        <b>Product</b>
                        <b>Subtotal</b>
                    </div>
                    <hr class="line">

                <?php 
                    $myCart = $cart->items; 
                ?>
               
                @if (count($myCart) > 0)
                    @foreach ($myCart as $item)

                    <div class="body__order__row">
                        <!-- name product -->
                        <div class="body__order__product__name">{{$item['name']}}</div>
                        <b>x{{$item['quantity']}}</b>
                        <!--  subtotal product -->
                        <div>${{$item['finalPrice'] * $item['quantity']}}</div>
                    </div>
                    <hr class="line">

                    @endforeach
                @endif


                    <div class="body__order__row">
                        <b>Sub-Total</b>
                        <div>${{$cart->total_price}}</div>
                    </div>
                    <hr class="line">
                    <!-- shipping -->
                    <div class="body__order__row">
                        <b>
                            <b class="body__ordershipping">SHIPPING</b>
                            <div class="body_ordershipping__type">COD - Cash On Delivery</div>
                        </b>
                        <div>${{$cart->shipping_price}}</div>
                    </div>
                    <hr class="line">


                    <!-- total -->
                    <div class="body__order__row">
                        <b>TOTAL</b>
                        <b class="body__ordertotal__total ">${{$cart->totalAndShipping()}}</b>
                    </div>
                    <hr class="line">
                    <p class="body__order__remind">
                        Your personal data will be used to process your order, support your experience throughout this
                        website, and for other purposes described in out privacy policy
                    </p>

                    <!-- button place order -->
                    <div class="placeorder">
                        <input type="submit" value="Place Order" type="submit" class="btn placeorder--btn">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('javascript')

@endsection
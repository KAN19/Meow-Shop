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
    <form action="" method="post">
        <div class="row checkout__page">
            <!-- =====Left-bill infor==== -->
            <div class="col-md-7">
                <div class="section__title">Bill Detail</div>
                <!-- email input -->
                <div class="input__field">
                    <div class="input__field__title">Your email*</div>

                    <input type="text" id="lname" name="lname" placeholder="Your Email" required>
                    <div class="login_account">
                        <a>Already have an account?</a>
                        <a id="login">Log in</a>
                    </div>
                </div>




                <!-- Name -->
                <div class="input__field">
                    <div class="input__field__title">Your name*</div>

                    <input type="text" id="fname" name="fname" placeholder="Your name" required>

                </div>

                <!-- select country -->
                <div class="input__field">
                    <div class="input__field__title">Province/City*</div>

                    <select class="input__field__selector" id="province" name="province">
                        <option value="Vietnam">Hà Nội</option>
                        <option value="Laos">Thành phố Hồ Chí Mính</option>
                        <option value="Cambodia">Đà Nẵng</option>
                        <option value="America">Huế</option>
                        <option value="China">Cần Thơ</option>
                    </select>

                </div>
                <!-- street address -->
                <div class="input__field">
                    <div class="input__field__title">Street Address*</div>

                    <input type="text" id="lname" name="ord_address" placeholder="Street Address">
                </div>

                <div class="input__field">
                    <div class="input__field__title">Phone*</div>

                    <input type="text" id="lname" name="lname" placeholder="Phone">
                </div>

                <div class="input__field">
                    <div class="input__field__title">Order note (optional)</div>

                    <textarea class="input__field__textarea" placeholder="Write something"></textarea>

                </div>
            </div>


            <!-- Your order -->
            <div class="col-md-5">
                <div class="section__title">Your Order</div>
                <div class="border__order">
                    <!-- product and subtotal -->
                    <div class=" body__order__row ">
                        <!-- dong product va subtotal -->
                        <b>Product</b>
                        <b>Subtotal</b>
                    </div>
                    <hr class="line">

                    <div class="body__order__row">
                        <!-- name product -->
                        <div class="body__order__product__name">Product names asd asd asda sd asd</div>
                        <b>x1</b>
                        <!--  subtotal product -->
                        <div>$9.99</div>
                    </div>
                    <hr class="line">

                    <div class="body__order__row">
                        <!-- name product -->
                        <div class="body__order__product__name">Product names asd asd asda sd asd</div>
                        <b>x1</b>
                        <!--  subtotal product -->
                        <div>$9.99</div>
                    </div>
                    <hr class="line">


                    <div class="body__order__row">
                        <b>Sub-Total</b>
                        <div>$31.99</div>
                    </div>
                    <hr class="line">
                    <!-- shipping -->
                    <div class="body__order__row">
                        <b>
                            <b class="body__ordershipping">SHIPPING</b>
                            <div class="body_ordershipping__type">COD - Cash On Delivery</div>
                        </b>
                        <div>$2</div>
                    </div>
                    <hr class="line">


                    <!-- total -->
                    <div class="body__order__row">
                        <b>TOTAL</b>
                        <b class="body__ordertotal__total ">$31.99</b>
                    </div>
                    <hr class="line">
                    <p class="body__order__remind">
                        Your personal data will be used to process your order, support your experience throughout this
                        website, and for other purposes described in out privacy policy
                    </p>

                    <!-- button place order -->
                    <div class="placeorder">
                        <input type="button" value="Place Order" type="submit" class="btn placeorder--btn">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('javascript')

@endsection
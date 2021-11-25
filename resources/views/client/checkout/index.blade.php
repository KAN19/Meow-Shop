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
    <div class="row checkout__page">
        <!-- bill detail -->
        <div class="col-md-7 bill__detail">            
            <div class="title_bill">Bill Detail</div><br>
            <!-- email input -->
            <div class="contact__email">
                <a class="contact__email__input">Contact Information</a>
                <form>
                    <input type="text" id="lname" name="lname"  placeholder="Your Email">
                </form>
            </div>
            <div class="login_account">
                <a>Already have an account?</a>
                <a id="login">Log in</a>
            </div>
            <div class="title__shippingaddress">Shipping Address</div>
            <!-- Name -->
            <div class="row name__cus">
                <div class="first__name col-sm">
                    <a class="title__firstname">First Name*</a>
                    <form>
                        <input type="text" id="fname" name="fname" placeholder="First name">
                    </form>
                </div>
                <div class="last__name col-sm">
                    <a class="title__lastname">Last Name*</a>
                    <form>
                        <input type="text" id="lname" name="lname"  placeholder="Last name">
                    </form>
                </div>
            </div>
            <!-- select country -->
            <div class="country">
                <a class="title__country">Province/City*</a>
                <form>  
                    <select class="country__select" id="country" name="country">
                        <option value="Vietnam">Hà Nội</option>
                        <option value="Laos">Thành phố Hồ Chí Mính</option>
                        <option value="Cambodia">Đà Nẵng</option>
                        <option value="America">Huế</option>
                        <option value="China">Cần Thơ</option>
                    </select>
                </form>               
            </div>
            <!-- street address -->
            <div class="street__address">
                <a class="title__streetaddress">Street Address*</a>
                <form>
                    <input type="text" id="lname" name="lname"  placeholder="Street Address">
                </form>
            </div>
            <div class="phone">
                <a class="title__phone">Phone*</a>
                <form>
                    <input type="text" id="lname" name="lname"  placeholder="Phone">
                </form>
            </div>
            <div class="order__note">
                <a class="title__note">Order note (optional)</a>
                <form>
                    <textarea class="title__note--write" placeholder="Write something"></textarea>
                </form>
            </div>
        </div>
        <!-- Your order -->
        <div class="col-md-5 your__order">
            <h class="title_order">Your Order</h>
            <div class="border__order">
                <!-- product and subtotal -->
                <div class="row body__ordertitle">
                    <!-- dong product va subtotal -->
                    <b class="body__ordertitle__product col-sm">Product</b>
                    <b class="body__ordertitle__subtotal col-sm">Subtotal</b>                    
                </div>
                <hr class="line"> 
                <div class="row body__orderproduct">
                    <!-- name product -->
                    <div class="body__orderproduct__name col-sm">Product name</div>
                    <b>x1</b>
                   <!--  subtotal product -->
                    <div class="body__orderproduct__subtotal col-sm">$9.99</div>
                </div>
                <hr class="line"> 
                <div class="row body__orderproduct">
                     <!-- name product -->
                    <div class="body__orderproduct__name col-sm">Product name</div>
                    <b>x2</b>
                    <!--  subtotal product -->
                    <div class="body__orderproduct__subtotal col-sm">$9.99</div>
                </div>
                <hr class="line"> 
                <div class="row body__orderproduct">
                     <!-- name product -->
                    <div class="body__orderproduct__name col-sm">Product name</div>
                    <b>x3</b>
                    <!--  subtotal product -->
                    <div class="body__orderproduct__subtotal col-sm">$9.99</div>
                </div>
                <hr class="line"> 
                <div class="row body__ordersubtotal">
                    <b class="body__ordersubtotal_title col-sm">SUBTOTAl</b>
                    <div class="body__ordersubtotal__subtotal col-sm">$31.99</div>
                </div>
                <!-- shipping -->
                <hr class="line"> 
                <b class="body__ordershipping">SHIPPING</b><br>
                <b class="body_ordershipping__type">COD - Cash On Delivery</b>
                <!-- total -->
                <div class="row body__ordertotal">
                    <b class="body__ordertotal__title col-sm">TOTAL</b>
                    <b class="body__ordertotal__total col-sm">$31.99</b>
                </div>
                <hr class="line"> 
                <p class="body__order__remind">
                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in out privacy policy
                </p>
                <!-- button place order -->
                <div class="placeorder">
                    <button type="button" class="btn placeorder--btn">Place Order</button>
                </div> 
            </div>
        </div>       
    </div>
</div>

@endsection

@section('javascript')

@endsection
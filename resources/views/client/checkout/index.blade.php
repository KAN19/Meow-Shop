@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/checkout.css">

@endsection

@section('title', 'Checkout')

@section('content')
<div class=".container-fluid">
    <div class="banner">
        <div class="banner__name">
            <div class="banner__name--size">CHECKOUT</div>
        </div>
    </div>
    <div class="row checkout__page">
        <div class="col-sm-7 bill__detail">
            <a class="title_bill">Bill Detail</a>
            <div class="row name__cus">
                <div class="first__name col-sm">
                    <a class="title__firstname">First Name*</a>
                    <form>
                        <input type="text" id="fname" name="fname" placeholder="Last name">
                    </form>
                </div>
                <div class="last__name col-sm">
                    <a class="title__lastname">Last Name*</a>
                    <form>
                        <input type="text" id="lname" name="lname"  placeholder="Last name">
                    </form>
                </div>
            </div>
            <div class="country">
                <a class="title__country">Country*</a>
                <form>  
                    <select class="country__select" id="country" name="country">
                        <option value="Vietnam">Vietname</option>
                        <option value="Laos">Laos</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="America">America</option>
                        <option value="China">China</option>
                    </select>
                </form>               
            </div>
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
                    <textarea placeholder="Write something"></textarea>
                </form>
            </div>
        </div>
        <div class="col-sm-5 your__detail">
            <h class="title_order">Your Order</h>
            <div class="border__order">
               
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection
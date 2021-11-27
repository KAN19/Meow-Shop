@extends('client.master')

@section('style')

<link rel="stylesheet" href="/css/client/contact.css">

@endsection

@section('title', 'Product Detail')

@section('content')
<div>
    <!-- Banner -->
    <div class="banner">
        <div class="banner__name">
            <div class="banner__name--title">CONTACT</div>
            <div>Home - Contact</div>
        </div>
        <!-- form -->
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name..">
                    </div>

                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="mail" name="mail" placeholder="Your email..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="province">Province</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="hcm">Hồ Chí Minh</option>
                            <option value="hanoi">Hà Nội</option>
                            <option value="vungtau">Vũng Tàu</option>
                            <option value="vinh">Vinh</option>
                            <option value="thanhhoa">Thanh Hóa</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="submit">
                    <button type="button" class="btn--submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @endsection


    @section('javascript')

    @endsection
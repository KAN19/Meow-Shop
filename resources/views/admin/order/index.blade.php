@extends('admin.master')

@section('title', 'Orders Manager')

@section('content_header')
<div class="d-flex align-items-center">
    <h1 class="mr-2">All Orders</h1>
    <span class="badge badge-pill badge-primary">6</span>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/order.css">
@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Orders</li>
@stop


@section('content')
<div class="order__containter p-4">
    <form class="" action="" method="post">
        <div class="d-flex w-100 ">
            <div class="  d-flex align-items-center mr-4 ">
                <div class="mr-2">
                    <label for="my-select">Status</label>
                </div>
                <select style="width: 150px;" id="my-select" class="form-control " name="">
                    <option>Text</option>
                </select>
            </div>

            <div class=" d-flex align-items-center mr-4 ">
                <div class="mr-2">
                    <label for="my-select">Order time</label>
                </div>
                <select style="width: 150px;" id="my-select" class="form-control " name="">
                    <option>Text</option>
                </select>
            </div>

            <div class="d-flex mr-4 align-items-center">
                <div class="mr-2">
                    <label for="my-select">Search: </label>
                </div>
                <input style="width: 150px;" id="my-input" class="form-control" type="text" name="">
            </div>
            <div class="align-items-center">
                <button style="width: 80px;" class="btn btn-primary" type="submit">Find</button>
            </div>
        </div>
        <hr>

    </form>
    <div class="row bg-primary py-1">
        <div class="col-1">Order</div>
        <div class="col-3">Customer Name</div>
        <div class="col-3">Price</div>
        <div class="col-3">Order time</div>
        <div class="col-2">Status</div>
    </div>

    <div class="row py-3 border align-items-center">
        <div class="col-1">Order</div>
        <div class="col-3">Customer Name</div>
        <div class="col-3">Price</div>
        <div class="col-3">Order time</div>
        <div class="col-2">
            <span class="badge badge-dark p-2">Pending</span>

        </div>
    </div>

    <!-- <span class="badge badge-warning p-2">Shipping</span>
    <span class="badge badge-success p-2">Completed</span>
    <span class="badge badge-danger p-2">Cancel</span> -->


</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("#master-order").addClass("active");
});
</script>
@stop
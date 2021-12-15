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
<link rel="stylesheet" href="{{url('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Orders</li>
@stop


@section('content')
<div class="order__containter p-4">
    <form class="" action="" method="post">
        <div class="d-flex w-100 ">
            <div class="flex-grow-1 d-flex align-items-center mr-4">
                <div class="input__label">
                    Status
                </div>
                <select style="width: 150px;" id="my-select" class="form-control " name="">
                    <option selected>------All-----</option>
                    <option>Pending</option>
                    <option>Shipping</option>
                    <option>Completed</option>
                    <option>Cancel</option>
                </select>
            </div>

            <div class="flex-grow-1 d-flex align-items-center mr-4 ">
                <div class="input__label">
                    Order time:
                </div>
                <div class="input-group" style="width: auto !important;">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->

            </div>

            <div class="flex-grow-1 d-flex mr-4 align-items-center">
                <div class="input__label">
                    Search:
                </div>
                <input style="width: 150px;" id="my-input" class="form-control" placeholder="Searching" type="text"
                    name="">
            </div>
            <div class="align-items-center flex-grow-1">
                <button class="btn btn-primary" type="submit">Find</button>
            </div>
            <div class="align-items-center flex-grow-1">
                <button class="btn btn-danger" type="submit">Clear</button>
            </div>
        </div>
        <hr>

    </form>
    <div class="row bg-primary py-1">
        <div class="col-1 text-center" style="text-align: center">Order</div>
        <div class="col-4 text-center">Customer Name</div>
        <div class="col-2 text-center">Price</div>
        <div class="col-3 text-center">Order time</div>
        <div class="col-2 text-center">Status</div>
    </div>

    @forelse($list_orders as $order)
        <a href="{{route('show-order-detail', $order->id)}}" style="color: black;" >
            <div class="row py-3 border align-items-center order__row">
                <div class="col-1 text-center">#{{$order->id}}</div>
                <div class="col-4 text-center">{{$order->customer_name}}</div>
                <div class="col-2 text-center">${{$order->last_total}}</div>
                <div class="col-3 text-center">{{$order->created_at}}</div>
                <div class="col-2 text-center">
                    @if ($order->order_status == "pending")
                        <span class="badge badge-dark p-2">Pending</span>
        
                    @elseif ($order->order_status == "shipping")
                        <span class="badge badge-warning p-2">Shipping</span>
        
                    @elseif ($order->order_status == "completed")
                        <span class="badge badge-success p-2">Completed</span>
        
                    @else 
                        <span class="badge badge-danger p-2">Cancel</span> 
                    @endif
                </div>
            </div>
        </a>
    @empty
        <p>Empty! </p>
    @endforelse
<!-- Large modal -->

</div>
@stop

@section('js')
<script src="{{url('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script>
$(function() {
    $('#reservation').daterangepicker({

            startDate: moment().startOf('month'),
            endDate: moment().endOf('month'),
            opens: 'left',
            locale: {
                format: 'DD/M/YYYY '
            }
        },
        function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
});

$(document).ready(function() {
    $("#master-order").addClass("active");
});
</script>
@stop
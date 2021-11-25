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
            <div class="  d-flex align-items-center mr-4 ">
                <div class="mr-2">
                    <label for="my-select">Status</label>
                </div>
                <select style="width: 150px;" id="my-select" class="form-control " name="">
                    <option selected>------All-----</option>
                    <option>Pending</option>
                    <option>Shipping</option>
                    <option>Completed</option>
                    <option>Cancel</option>
                </select>
            </div>

            <div class=" d-flex align-items-center mr-4 ">
                <div class="mr-2">
                    <label for="my-select">Order time</label>
                </div>
                <!-- <select style="width: 150px;" id="my-select" class="form-control " name="">
                    <option selected>------All-----</option>
                    <option>1 Week ago</option>
                    <option>1 Month ago</option>
                    <option>3 Month ago</option>
                    <option>6 Month ago</option>
                </select> -->



                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->

            </div>

            <div class="d-flex mr-4 align-items-center">
                <div class="mr-2">
                    <label for="my-select">Search: </label>
                </div>
                <input style="width: 150px;" id="my-input" class="form-control" placeholder="Searching" type="text"
                    name="">
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
<script src="{{url('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script>
$('#reservation').daterangepicker();
$('#daterange-btn').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
    },
    function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
)
$(document).ready(function() {
    $("#master-order").addClass("active");
});
</script>
@stop
@extends('admin.master')

@section('title', 'Orders Manager')

@section('content_header')
<div class="d-flex align-items-center">
    <h1 class="mr-2">Contacts</h1>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/contact.css">
@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Contacts</li>
@stop


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div>
            <p>Customer Contacts's Information</p>
        </div>
        <div class="container--info">
            <div class="info d-flex flex-row ">
                <div class="p-3">Nguyễn Anh Kiệt</div>
                <div class="p-3">anhkiet@gmail.com</div>
                <div class="p-3">0907438265</div>
            </div>
            <div class="d-flex flex-row ">
                <div class="p-3">Sản phẩm tuyệt vời. Tôi muốn đăng ký làm đại lý con của bạn</div>
            </div>
            <hr>
            <div class="info d-flex flex-row ">
                <div class="p-3">Lê Ngọc Minh Thư</div>
                <div class="p-3">minhthu@gmail.com</div>
                <div class="p-3">0384153201</div>
            </div>
            <div class="d-flex flex-row ">
                <div class="p-3">Thêm sản phẩm về y tế cho mèo</div>
            </div>
            <hr>
            <div class="info d-flex flex-row ">
                <div class="p-3">Nguyễn Thành Đạt</div>
                <div class="p-3">thanhdat@gmail.com</div>
                <div class="p-3">0388456231</div>
            </div>
            <div class="d-flex flex-row ">
                <div class="p-3">Thêm sản phẩm về y tế cho mèo</div>
            </div>
        </div>
        <!-- /.container--info -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $("#master-contact").addClass("active");
    });
</script>
@stop
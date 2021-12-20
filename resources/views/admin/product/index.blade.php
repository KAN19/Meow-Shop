@extends('admin.master')

@section('title', 'Product')

@section('content_header')
<h1>All products</h1>
@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Products</li>
@stop

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($listProducts) --}}
                    @foreach ($listProducts as $product)
                    <tr class="odd gradeX" align="center">
                        <td>#{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount * 100}} % </td>
                        <td>{{$product->status ? 'Hiện' : 'Ẩn'}}</td>
                        <td class="center"><i class="fas fa-trash"></i><a href="#"> Delete</a></td>
                        <td class="center"><i class="fas fa-pencil-alt"></i> <a
                                href="{{route('edit-product', $product->slug)}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <div class="pagination justify-content-center mt-3">
        {{$listProducts->appends(request()->all())->links()}}
    </div>
    <!-- /.container-fluid -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("#product-menu").addClass("menu-open");
    $("#master-product").addClass("active");
    $("#all-products").addClass("active");
});
</script>
@stop
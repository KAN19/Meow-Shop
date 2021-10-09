@extends('adminlte::page')

@section('title', 'Category Manager')

@section('content_header')
    <h1>Edit category</h1>
@stop

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid bg-white">
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('edit-category', $category->slug)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" value="{{$category->name}}" name="cateName" placeholder="Please Enter Category Name" />
                        </div>
                        <button type="submit" class="btn btn-primary">Apply change</button>
                        <a  class="btn btn-danger" href="{{route('show-category')}}">Back</a>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop

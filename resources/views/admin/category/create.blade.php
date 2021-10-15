@extends('adminlte::page')

@section('title', 'Category Manager')

@section('content_header')
<h1>Create category</h1>
@stop

@section('content')
<div id="page-wrapper">
    <div class="container-fluid bg-white">
        <div class="row">
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('create-category')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="cateName" placeholder="Please Enter Category Name" />
                        @error('cateName')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Category Add</button>
                    <a class="btn btn-danger" href="{{route('show-category')}}">Back</a>
                    <form>
                        @if (session('success'))
                        {{session('success')}}
                        @endif

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop
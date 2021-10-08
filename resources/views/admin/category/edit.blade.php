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
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                        </div>
                        <div class="form-group">
                            <label>Category Keywords</label>
                            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                        </div>
                        <button type="submit" class="btn btn-primary">Category Add</button>
                        <button type="reset" class="btn btn-danger">Back</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop

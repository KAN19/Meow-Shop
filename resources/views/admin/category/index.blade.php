@extends('admin.master')

@section('title', 'Category Manager')

@section('content_header')
<h1>List categories</h1>

@stop


@section('css')
<link rel="stylesheet" href="/css/admin/category.css">
@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Category</li>
@stop


@section('content')
<div id="page-wrapper" class="category_admin">
    <div class="container-fluid">
        <div>
            <a href="{{route('create-category')}}" class="btn btn-primary btn_addcategory_admin">Thêm mới</a>
        </div>

        <div class="row">
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover table_category" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th style="width:40%">Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                @foreach ($listCates as $item)
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>{{$counter++}}</td>
                        <td>{{$item->name}}</td>
                        <td class="center"><div class="btn btn-danger" id="btn_del_category"><i class="fas fa-trash"></i><a class="text_del"
                                href="{{route('delete-category', $item->slug)}}"> Delete</a></div>
                        </td>
                        <td class="center"><div class="btn btn-info"id="btn_edit_category"><i class="fas fa-pencil-alt icon_edit_category"></i> <a class="text_edit"
                                href="{{route('edit-category', $item->slug)}}">Edit</a></div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("#category-menu").addClass("menu-open");
    $("#master-category").addClass("active");
    $("#all-categories").addClass("active");
});
</script>
@stop
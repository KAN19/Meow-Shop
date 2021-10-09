@extends('adminlte::page')

@section('title', 'Category Manager')

@section('content_header')
    <h1>List categories</h1>
@stop

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
           <div>
                <a href="{{route('create-category')}}" class="btn btn-primary">Thêm mới</a>
           </div>
            
            <div class="row">
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    @foreach ($listCates as $item)
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>{{$counter++}}</td>
                                <td>{{$item->name}}</td>
                                <td class="center"><i class="fas fa-trash"></i><a href="{{route('delete-category', $item->slug)}}"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i> <a href="{{route('edit-category', $item->slug)}}">Edit</a></td>
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

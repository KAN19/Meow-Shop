@extends('adminlte::page')

@section('title', 'Category Manager')

@section('content_header')
    <h1>List categories</h1>
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
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td>1</td>
                            <td>Tin Tức</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop

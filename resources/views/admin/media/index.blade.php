@extends('adminlte::page')

@section('title', 'Media')

@section('content_header')
    <h1>Media</h1>
@stop

@section('content')
    <div>
        <form action="" method="post">
            <input type="file" name="image">
            <button type="submit">Upload</button>
        </form>
    </div>
@stop

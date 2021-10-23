@extends('adminlte::page')

@section('title', 'Media')

@section('content_header')
<h1>Media</h1>
@stop

@section('content')
<div>
    <form action="{{route('upload-media')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Upload</button>
        <img src="" alt="" name="image2">
    </form>


</div>
@stop
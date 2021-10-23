@extends('adminlte::page')

@section('title', 'Media')

@section('content_header')
<h1>Media</h1>
@stop

@section('content')
<div>
    {{-- <form action="{{route('upload-media')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">Upload</button>
    </form> --}}

    <iframe src="{{url('/filemanager/dialog.php?akey=ApHqJ79hkX8BdPgDhysilgfBsZ5QuZMBw4M0UsY2DGw')}}"
        style="width: 100%; height:500px; overflow-y:auto; border: 1px solid LightGray"> </iframe>

</div>
@stop
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
    
        <iframe src="{{url('/filemanager/dialog.php')}}" style="width: 100%; height:500px; over-flow-y:auto; border: 1px solid LightGray"> </iframe>

    </div>
@stop

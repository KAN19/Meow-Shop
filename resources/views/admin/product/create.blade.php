@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
<h1>Create new product</h1>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/product.css">
@stop


@php
$config = [
"height" => "140",
"toolbar" => [
['style', ['bold', 'italic', 'underline', 'clear']],
['font', ['strikethrough']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
['height', ['height']],
['insert', ['link']],
],
]
@endphp

@section('plugins.Summernote', true)

@section('content')
<div id="page-wrapper">
    <div class="container-fluid bg-white">

        <form action="{{route('create-product')}}" method="POST">
            @csrf
            <div class="row p-3">
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input class="form-control" name="prd_name" placeholder="Please Enter Product Name" />
                        @error('prd_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <x-adminlte-text-editor name="prd_description" class="form-control"
                            placeholder="Please Enter Product description" :config="$config" />

                        {{-- @error('prd_description')
                            <div class="text-danger">
                                {{ $message }}
                    </div>
                    @enderror --}}
                </div>

                <div class="form-group">
                    <label>Image
                        <div class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modal-list-images">
                            Add
                        </div>
                    </label>
                    <input type="text" class="form-control" name="prd_list_images" placeholder="Add image"
                        id="listImages" style="display: none;" />
                    <div class="row" id="images-container">

                    </div>

                    @error('prd_list_images')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Category</label>
                    <select name="prd_category" class="form-control">
                        <option value="">SELECT ONE</option>
                        @foreach ($cates as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>

                    @error('prd_category')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="prd_price"
                        placeholder="Please Enter Product Price" />
                    @error('prd_price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group ">
                    <label>Discount %</label>
                    <input type="number" min="0" max="100" value="0" class="form-control" name="prd_discount"
                        placeholder="Please Enter Product Price" />
                    @error('prd_discount')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group ">
                    <label>Image
                        <div class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modal-ava-image">
                            Add
                        </div>
                    </label>
                    <input type="text" class="form-control" name="prd_ava" placeholder="Add image" id="image"
                        style="display: none;" />
                    <img id="image-ava" src="" class="image__ava">

                    @error('prd_ava')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Visible</label>
                    <div class="radio ">
                        <label class="mr-3">
                            <input type="radio" name="prd_status" value="1" checked>
                            Enable
                        </label>
                        <label>
                            <input type="radio" name="prd_status" value="0">
                            Disable
                        </label>
                    </div>
                    @error('prd_status')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary"> Save data</button>

    </div>
    <form>
</div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal-ava-image" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="{{url('/filemanager/dialog.php?akey=ApHqJ79hkX8BdPgDhysilgfBsZ5QuZMBw4M0UsY2DGw&field_id=image')}}"
                    style="width: 100%; height:400px; border: 1px solid LightGray"> </iframe>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal-list-images" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="{{url('/filemanager/dialog.php?akey=ApHqJ79hkX8BdPgDhysilgfBsZ5QuZMBw4M0UsY2DGw&field_id=listImages')}}"
                    style="width: 100%; height:400px; border: 1px solid LightGray"> </iframe>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#modal-ava-image').on('hide.bs.modal', event => {
        const imageLink = $('input#image').val();
        const imageFullLink = "{{url('/')}}" + imageLink;
        $('#image-ava').attr('src', imageLink);
        console.log(imageFullLink)
    })

    $('#modal-list-images').on('hide.bs.modal', event => {
        const imageLinks = $('input#listImages').val();
        let html = '';
        try {
            const arrImages = $.parseJSON(imageLinks);
            for (let i = 0; i < arrImages.length; i++) {
                let realUrl = "{{url('/')}}" + arrImages[i];
                realUrl = realUrl.replace(/\s/g, '%20');
                console.log('real url', realUrl);
                html += `   <div class="col-md-4">
                            <img src=${realUrl}  style="width: 100%;">
                        </div>`
            }
        } catch (error) {
            let realUrl = "{{url('/')}}" + imageLinks;
            realUrl = realUrl.replace(/\s/g, '%20');
            console.log('real url', realUrl);
            html += `   <div class="col-md-4">
                            <img src=${realUrl}  style="width: 100%;">
                        </div>`
        }
        console.log(html);
        $('#images-container').html(html);
    })
});
</script>
@stop
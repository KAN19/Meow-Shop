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
                    <div class="form-group has-validation">
                        <label>Product Name</label>
                        <input class="form-control" name="prd_name" placeholder="Please Enter Product Name" />

                        @error('prd_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group has-validation">
                        <label>Short description</label>
                        <textarea class="form-control" style="resize: none;" name="prd_short_descrip"
                            placeholder="Please Enter Product Name"> </textarea>

                        @error('prd_short_descrip')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <x-adminlte-text-editor name="prd_description" class="form-control"
                            placeholder="Please Enter Product description" :config="$config" />
                    </div>


                    <div class="form-group">
                        <label>Image
                            <div class="btn btn-sm btn-outline-primary " data-toggle="modal"
                                data-target="#modal-list-images">
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
                        <input type="number" min="0" max="100" value="0" class="form-control w-50" name="prd_discount"
                            placeholder="Please Enter Product Price" />
                        @error('prd_discount')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Available</label>
                        <div class="radio ">
                            <label class="mr-3">
                                <input type="radio" name="prd_is_stock" value="1" checked>
                                In stock
                            </label>
                            <label>
                                <input type="radio" name="prd_is_stock" value="0">
                                Out of stock
                            </label>
                        </div>
                        @error('prd_status')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label>Image
                            <div class="btn btn-sm btn-outline-warning d-none btn__edit" data-toggle="modal"
                                data-target="#modal-ava-image">Edit
                            </div>
                        </label>
                        <input type="text" class="form-control" name="prd_ava" placeholder="Add image" id="image"
                            style="display: none;" />
                        <div id="ava_blank" class="image__ava-blank" data-toggle="modal" data-target="#modal-ava-image">
                            <div>Click to add image</div>
                        </div>
                        <img id="image-ava" src="" class="image__ava">

                        @error('prd_ava')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group d-flex justify-content-end">
                        <a class="btn btn-outline-danger mr-2" href="{{route('show-product')}}"> Back</a>
                        <button type="submit" class="btn btn-outline-primary"> Save data</button>
                    </div>
                </div>
            </div>
    </div>
    <form>
</div>
</div>

@include('admin.product.image-modal')

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#modal-ava-image').on('hide.bs.modal', event => {
        const imageLink = $('input#image').val();
        if (imageLink) {
            $('#ava_blank').addClass('d-none');
            $('.btn__edit').addClass('d-inline');
            const imageFullLink = "{{url('/')}}" + imageLink;
            $('#image-ava').attr('src', imageLink);
            console.log(imageFullLink)
        }
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
                html += `   <div class="col-md-3 mb-4" style=" cursor: pointer;" data-toggle="modal" data-target="#modal-list-images" >
                            <img src=${realUrl}  style="width: 150px; height: 150px; object-fit: cover;">
                        </div>`
            }
        } catch (error) {
            let realUrl = "{{url('/')}}" + imageLinks;
            realUrl = realUrl.replace(/\s/g, '%20');
            console.log('real url', realUrl);
            html += `   <div class="col-md-3 mb-4" style=" cursor: pointer;" data-toggle="modal" data-target="#modal-list-images">
                            <img src=${realUrl}  style="width: 150px; height: 150px; object-fit: cover;">
                        </div>`
        }
        console.log(html);
        $('#images-container').html(html);
    })
});
</script>
@stop
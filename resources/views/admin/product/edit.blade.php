@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
<h1>Edit product {{$product->name}}</h1>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/product.css">
@stop

@php
$config = [
"margin-bottom" => "0",
"marginBottom" => "0",
"padding-bottom" => "0",
"height" => "150",
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
        <form action="{{route('edit-product', $product->slug)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row p-3">
                <div class="col-md-9">
                    <div class="form-group has-validation">
                        <label>Product Name</label>
                        <input class="form-control @error('prd_name') border border-danger @enderror " name="prd_name"
                            placeholder="Please Enter Product Name" value="{{$product->name}}" />

                        @error('prd_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group has-validation">
                        <label>Short description</label>
                        <textarea class="form-control  @error('prd_short_descrip') border border-danger @enderror"
                            maxlength="150" style="resize: none;" name="prd_short_descrip"
                            placeholder="Short description">{{$product->short_description}}</textarea>

                        @error('prd_short_descrip')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <x-adminlte-text-editor name="prd_description" class="form-control"
                            placeholder="Please Enter Product description" placeholder="Write some text..."
                            :config="$config">{{$product->description}}</x-adminlte-text-editor>
                        @error('prd_description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Image
                            <div class="btn btn-sm btn-outline-primary " data-toggle="modal"
                                data-target="#modal-list-images">
                                Add
                            </div>
                        </label>
                        <input type="text" class="form-control" name="prd_list_images" placeholder="Add image"
                            value="{{$product->list_image}}" id="listImages" style="display: none;" />
                        <div class="row" id="images-container">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="prd_category"
                            class="form-control  @error('prd_category') border border-danger @enderror">
                            <option value="">SELECT ONE</option>
                            @foreach ($cates as $item)
                            @if ($item->id == $product->category_id)
                            <option selected="selected" value="{{$item->id}}">{{$item->name}}</option>
                            @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
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
                        <input type="number" class="form-control @error('prd_price') border border-danger @enderror"
                            name="prd_price" placeholder="Please Enter Product Price" value="{{$product->price}}" />
                        @error('prd_price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label>Discount %</label>
                        <input type="number" value="{{$product->discount}}" min="0" max="100" class="form-control w-50"
                            name="prd_discount" placeholder="Please Enter Product Price" />
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
                                <input type="radio" name="prd_is_stock" value="1" @if ($product->is_stock == 1)
                                checked
                                @endif >
                                In stock
                            </label>

                            <label>
                                <input type="radio" name="prd_is_stock" value="0" @if ($product->is_stock == 0)
                                checked
                                @endif>
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
                            value="{{$product->image}}" style="display: none;" />
                        <div id="ava_blank" class="image__ava-blank @error('prd_ava') border border-danger @enderror"
                            data-toggle="modal" data-target="#modal-ava-image">
                            <div>Click to add image</div>
                        </div>
                        @error('prd_ava')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <img id="image-ava" src="" class="image__ava">

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
<script src="/js/admin/productModal.js"></script>
<script type="text/javascript">
var url = "{{url('/')}}";
</script>
@stop
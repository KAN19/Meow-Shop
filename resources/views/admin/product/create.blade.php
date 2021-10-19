@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
<h1>Create new product</h1>
@stop

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
                            <x-adminlte-text-editor name="prd_description" class="form-control" placeholder="Please Enter Product description"/>

                        {{-- @error('prd_description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    
                    <div class="form-group">
                        <label>Image</label>
                        <textarea name="prd_images" class="form-control"
                            placeholder="Please Enter Product description"></textarea>

                        @error('prd_images')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="prd_category" class="form-control" >
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
                        <input type="number" class="form-control" name="prd_price" placeholder="Please Enter Product Price" />
                        @error('prd_price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label>Discount %</label>
                        <input type="number" min="0" max="100" value="0" class="form-control" name="prd_discount" placeholder="Please Enter Product Price" />
                        @error('prd_discount')
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
@stop
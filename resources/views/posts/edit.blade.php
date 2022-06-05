@extends('layouts.app')
@section('content')
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-md-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 form-inner-cont">
                    @if ($errors->any())
                    <div class="container pt-4">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <div class="iq-alert-icon">
                                <i class="ri-alert-line"></i>
                            </div>
                            <div class="iq-alert-text">
                                <li>{{ $error }}</li>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <form class="signin-form" method="POST" action="{{ route('update', $post->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="heading">
                            <h3 class="category-title mb-3">Edit Blog Post</h3>
                        </div>
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="name" value="{{ $post->name }}" placeholder="Enter your name *">
                            </div>
                            <div class="form-input">
                                <input type="text" name="title" id="title" value="{{ $post->title }}" placeholder="Enter your title *">
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="short" id="short" value="{{ $post->short }}">{{ $post->short }}</textarea>
                        </div>
                        <div class="form-input">
                            <textarea name="description" id="description" value="{{ $post->description }}">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-input">
                            <div class="col-md-6">
                                <select class="form-control custom-select" id="category_id" name="category_id" placeholder="Category" >
                                    <option value="{{ $post->category_id }}">{{ $post->category->name }}</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-input">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="formFile" class="form-label mt-0">Image</label>
                                    <img src="{{ url('/images/'.$post->image) }}" width="50px">
                                </div>
                                <div class="col-md-7">
                                    <label for="formFile" class="col-form-label">Upload image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-style btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
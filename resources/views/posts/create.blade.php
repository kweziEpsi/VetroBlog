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
                    <form class="signin-form" method="POST" action="{{ route('save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="heading">
                            <h3 class="category-title mb-3">Blog Post</h3>
                        </div>
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="name" placeholder="Enter your name *"
                                    required="" />
                            </div>
                            <div class="form-input">
                                <input type="text" name="title" id="title" placeholder="Enter your title *"
                                    required="" />
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="short" id="short" placeholder="Enter short description"
                                required=""></textarea>
                        </div>
                        <div class="form-input">
                            <textarea name="description" id="description" placeholder="Enter description"
                                required=""></textarea>
                        </div>
                        <div class="form-input">
                            <div class="col-md-6">
                                <select class="form-control custom-select" name="category_id" placeholder="Category" required="">
                                    <option value="}">Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-input">
                            <div class="col-md-8">
                                <label for="formFile" class="col-form-label">Upload image</label>
                                <input class="form-control" type="file" name="image" id="image">
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

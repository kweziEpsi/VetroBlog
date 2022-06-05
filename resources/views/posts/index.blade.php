@extends('layouts.app')
@section('content')

<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="section-title-left mb-4"> Posts </h3>
                <div class="row">
                    <div class="col-lg-12 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="container py-lg-4 py-md-2">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    @if ($message = Session::get('delete'))
                                    <div class="alert alert-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <div class="pull-right">
                                        <a href="/add/post" class="btn btn-md btn-primary"><span style="color:white" class="fa fa-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body blog-details">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th style="width:10%;">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->short }}</td>
                                    <td>
                                        <div class="g-2">
                                            <a href="{{ url('/post/details/'.$post->slug) }}" class="btn btn-sm btn-primary"><span class="fa fa-eye"></span></a>
                                            <a href="{{ url('/edit/post/'.$post->slug) }}" class="btn btn-sm btn-info"><span class="fa fa-edit"></span></a>
                                            <form action="{{ url('/delete/post/'.$post->id) }}" method="POST"  enctype="multipart/form-data">
                                                @csrf 
                                                <button type="submit" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></button>
                                            </form>
                                                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
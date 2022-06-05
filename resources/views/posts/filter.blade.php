@extends('layouts.app')
@section('content')
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="section-title-left mb-4"> Blog Posts </h3>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a>
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="{{ url('/images/'.$post->image) }}"  height="300px" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">{{ $post->category->name }}</span>
                                <a  class="blog-desc">{{ $post->name }}</a>
                                </a>
                                
                                <p>{{ $post->short }}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="{{ url('/images/avatar.jpg') }}" alt=""  class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a>{{ $post->user->name }} </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> {{ $post->created_at }}</span>
                                            <a  href="{{ url('/post/details/'.$post->slug) }}" class="blog-desc"><span class="fa fa-eye"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
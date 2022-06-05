@extends('layouts.app')
@section('content')
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <h3 class="section-title-left mb-4"> Blog Post </h3>
                    <div class="col-lg-8 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a>
                                    <img class="card-img-bottom d-block radius-image-full" src="{{ url('/images/'.$post->image) }}" height="300px" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">{{ $post->category->name }}</span>
                                <a class="blog-desc">{{ $post->name }}</a>
                                </a>

                                <p>{{ $post->short }}</p><br>
                                <p>{{ $post->description }}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="{{ url('/images/avatar.jpg') }}" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a>{{ $post->user->name }}</a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> {{ $post->created_at }}  </span>
                                        </li>
                                        @if( $total  <= 10)
                                        <li class="meta-item blog-lesson">
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        @elseif($total > 10 && $total <= 20)
                                        <li class="meta-item blog-lesson">
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        @elseif($total > 20 && $total <= 30)
                                        <li class="meta-item blog-lesson">
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        @elseif($total > 30 && $total <= 40)
                                        <li class="meta-item blog-lesson">
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        @elseif($total > 40 && $total <= 50)
                                        <li class="meta-item blog-lesson">
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star-o" style="color:gold"></span>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div><br>
                </center>
                <center>
                    <div class="col-lg-8 col-md-6 item">
                        @if(Auth::id()!= $post->user_id)
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
                        <form class="signin-form" method="POST" action="{{ route('rate', $post->id) }}" enctype="multipart/form-data">
                            <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Rate post</h3>
                            @csrf
                            <div class="form-input">
                                <div class="col-md-2">
                                    <select class="form-control custom-select" id="rating" name="rating" placeholder="Rating" required="">
                                        <option value="0">Rate</i></option>
                                        <option value="1">1</i></option>
                                        <option value="2">2</option>
                                        <option value="3">3</span></option>
                                        <option value="4">4</option>
                                        <option value="5">5</span></option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-md btn-primary"><span style="color:white" class="fa fa-plus"></span></button>
                            </div>
                        </form>
                        @elseif(Auth::id() == $post->user_id)
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <h3 class="section-title-left mb-4"> Post ratings </h3>
                            </div>
                            <div class="card-body blog-details">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Rating</th>
                                            <th>Rated By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ratings as $rating)
                                        <tr>
                                            <td>{{ $rating->rating }}</td>
                                            <td>{{ $rating->user->name }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif

                    </div>
                    <center>
            </div>
        </div>
    </div>
</div>

@endsection
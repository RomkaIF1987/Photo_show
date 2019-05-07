@extends('layouts.app')

@section('content')

    <div class="site-blocks-cover overlay inner-page"
         style="background-image: url(/storage/album_covers/{{$album->cover_image}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    {{--<span class="sub-text">Our Awesome</span>--}}
                    <h1>{{$album->name}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($album->photos as $photo)
                    <div class="col-lg-4 col-md-6 mb-4 project-entry">
                        <a href="#" class="d-block figure">
                            <img src="/storage/photo/{{$photo->image}}" alt="Image" class="img-fluid">
                        </a>
                        <h3 class="mb-0"><a href="#">{{$photo->title}}</a></h3>
                        <span class="text-muted">{{$photo->description}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

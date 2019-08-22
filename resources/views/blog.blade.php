@extends('layouts.app')

@section('content')


    <div class="site-blocks-cover overlay inner-page" style="background-image: url(storage/images/1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h1>Новини</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                        <a href="{{route('blog.show', ['blog' => $blog->id])}}" class="d-block figure">
                            <img src="storage/images/{{$blog->image}}" alt="Image" class="img-fluid">
                        </a>
                        <span
                            class="text-muted d-block mb-2">{{date('M j, Y H:i', strtotime($blog->created_at))}}</span>
                        <h3><a href="#">{{$blog->title}} </a></h3>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    {{$blogs->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection

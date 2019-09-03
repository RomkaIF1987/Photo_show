@extends('layouts.app')

@section('content')


    <div class="site-blocks-cover overlay inner-page" style="background-image: url(/storage/images/{{$blog->image}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h1>{{$blog->title}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row no-gutters align-items-stretch">
            <div class="col-md-12 col-lg-7 py-5">
                {!!$blog->body!!}
            </div>
        </div>
    </div>


@endsection

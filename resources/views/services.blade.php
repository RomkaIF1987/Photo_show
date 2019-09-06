@extends('layouts.app')

@section('content')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url(storage/images/1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h1>Наші послуги</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="media custom-media">
                            <div class="mr-3 icon"><span class="flaticon-interior-design display-4"></span></div>
                            <div class="media-body">
                                <h5 class="mt-0">{{$service->name}}</h5>
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

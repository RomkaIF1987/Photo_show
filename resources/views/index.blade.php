@extends('layouts.app')

@section('content')

    <div class="site-blocks-cover overlay" style="background-image: url(storage/images/1.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-md-8">
                    <span class="sub-text">Елітні вироби з масиву дерева</span>
                    <h1>ФАБРИКА МЕБЛІВ ТА ДВЕРЕЙ "ХІТА"</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-block-1">
        <div class="container">
            <div class="row">
                @foreach($albums as $album)
                    <div class="col-lg-4">
                        <a href="{{route('projects', ['album' => $album->id])}}"
                           class="site-block-feature d-flex p-4 rounded mb-4">
                            <div class="mr-3">
                                <span class="icon {{$album->icon_image}} font-weight-light h2"></span>
                            </div>
                            <div class="text">
                                <h3>{{$album->name}}</h3>
                                <p>{{$album->description}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="cocoen">
                    <img src="storage/images/before3.jpg" alt="Image">
                    <img src="storage/images/after3.jpg" alt="Image">
                </div>
                <div class="col-lg-4 ml-auto">
                    <span class="sub-title">Вибирай найкраще</span>
                    <h2 class="font-weight-bold text-black mb-5">Чому ми?</h2>
                    <div class="accordion" id="accordionExample">
                        @foreach($questions as $question)
                            <h2 class="mb-0 border rounded mb-2">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#{{$question->div_id}}"
                                        aria-expanded="false"
                                        aria-controls="{{$question->aria_labelledby}}">
                                    {{$question->id}}. {{$question->body}}
                                </button>
                            </h2>

                            <div id="{{$question->div_id}}" class="collapse"
                                 aria-labelledby="{{$question->aria_labelledby}}"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{{$question->answer}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container site-section block-13 testimonial-wrap">

        <div class="row">
            <div class="col-12 text-center">
                <span class="sub-title">Щасливі клієнти</span>
                <h2 class="font-weight-bold text-black mb-5">Відгуки</h2>
            </div>
        </div>

        <div class="nonloop-block-13 owl-carousel">
            @foreach($comments as $comment)
                <div class="testimony">
                    <img src="storage/images/{{$comment->image}}" alt="Image" class="img-fluid">
                    <h3>{{$comment->name}}</h3>
                    <span class="sub-title">Owner of Building Co.</span>
                    <p>&ldquo;<em>{{$comment->description}}</em>&rdquo;</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="site-section site-block-3 bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <span class="sub-title">Наші вироби</span>
                <h2 class="font-weight-bold text-black mb-5">Каталог</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-border">
                        <img src="storage/images/2.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-items">
                        @foreach($albums as $album)
                            <div class="{{$album->div_class}} pb-5">
                                <a href="{{route('projects', ['album' => $album->id])}}"
                                   class="d-flex text-center feature active p-4 mb-4 bg-white">
                                    <span class="align-self-center w-100">
                                        <span class="d-block mb-3">
                                             <span class="{{$album->icon_image}} display-3"></span>
                                         </span>
                                      <h3>{{$album->name}}</h3>
                                     </span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="sub-title">News &amp; Update</span>
                    <h2 class="font-weight-bold text-black mb-5">Our Blog Posts</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-2">23, January 2019</span>
                    <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-2">23, January 2019</span>
                    <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                    <a href="#" class="d-block figure">
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <span class="text-muted d-block mb-2">23, January 2019</span>
                    <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
                </div>

            </div>
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <p><a href="#" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

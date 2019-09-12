@extends('layouts.app')

@section('content')
    <h1 class="text-center text-uppercase button font-weight-bolder">{{$album->name}}</h1>
    <main role="main">
        @auth
            <p class="button">
                <a href="{{route('photos.create', ['album' => $album->id])}}" class="btn btn-success button">Додати нову фотографію</a>
            </p>
        @endauth
        <div class="album py-3 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($album->photos as $photo)
                        <div class="col-md-auto">
                            <div class="card mb-4 shadow-sm">
                                <a href="/storage/photo/{{$photo->photo}}" data-lightbox="mygallery">
                                    <img src="/storage/photo/{{$photo->photo}}" class="img-thumbnail">
                                    <div class="lightboxOverlay"></div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-text text-center">{{$photo->title}}</h5>
                                    <p class="card-text">{{$photo->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @auth
                                            <div class="btn-lg">
                                                <form action="{{route('photos.destroy', ['photo' => $photo])}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.app')
@section('content')
    <main role="main">
        @auth
            <p class="button">
                <a href="{{route('albums.create')}}" class="btn btn-primary btn-sm">Створити новий альбом</a>
            </p>
        @endauth
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($albums as $album)
                        <div class="col-md-auto card-group">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <a href="/albums/{{$album->id}}">
                                    <img src="storage/album_covers/{{$album->cover_image}}" class="img-thumbnail">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$album->name}}</h5>
                                    <p class="card-text">{{$album->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @auth
                                            <div class="btn-group">
                                                <a href="{{route('albums.edit', ['album' => $album->id])}}"
                                                   class="btn btn-outline-info">Edit</a>
                                                <form action="{{route('albums.destroy', ['album' => $album])}}"
                                                      method="POST"
                                                      style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
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
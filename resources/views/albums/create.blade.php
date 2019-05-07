@extends('layouts.old_app')

@section('content')
    <h2 class="button">СТВОРИТИ НОВИЙ АЛЬБОМ</h2>
    <form action="{{route('albums.store', $album->id)}}" method="POST" enctype='multipart/form-data' class="was-validated button">
        @include('albums.partials.form')

        <input type="submit" class="btn btn-success btn-lg" value="Створити новий альбом">
    </form>

@endsection

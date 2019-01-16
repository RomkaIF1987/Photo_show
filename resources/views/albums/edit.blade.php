@extends('layouts.app')

@section('content')
    <h2>Edit ALBUM - {{$album->name}}</h2>
    <form action="{{route('albums.update', $album->id)}}" method="POST" enctype='multipart/form-data'>
        @method('PATCH')
        @include('albums.partials.form')


        <input type="submit" class="btn btn-success btn-lg" value="Edit album">
    </form>

@endsection
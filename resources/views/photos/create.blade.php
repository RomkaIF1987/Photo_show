@extends('layouts.old_app')

@section('content')
    <h2 class="button">ДОДАТИ НОВУ ФОТОГРАФІЮ</h2>
    <form action="{{route('photos.store')}}" method="POST" enctype='multipart/form-data' class="was-validated button">
        @include('photos.partials.form')

        <input type="submit" class="btn btn-success btn-lg" value="Додати нову фотографію">
    </form>

@endsection
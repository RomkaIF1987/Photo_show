@extends('adminPanel.layouts.app')

@section('content')
    <form action="{{route('albums.update', $album->id)}}" method="POST" enctype='multipart/form-data'
          class="was-validated button">
    @csrf
    <!-- /header -->
        <hr class="noscreen"/>
        <!-- Columns -->
        <div id="cols" class="box">
            <hr class="noscreen"/>
            <!-- Content (Right Column) -->
            <div id="content" class="box">
                <!-- Form -->
                <h3 class="tit">Редагувати альбом</h3>

                @method('PATCH')

                @include('albums.partials.albumForm')

            </div>
            <!-- /content -->
        </div>
        <!-- /cols -->
        <hr class="noscreen"/>
    </form>
@endsection

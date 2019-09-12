@extends('adminPanel.layouts.app')

@section('content')
    <form action="{{route('photos.store')}}" method="POST" enctype='multipart/form-data'
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
                <h3 class="tit">Додати фотографію</h3>

                @include('photos.partials.photoForm')

            </div>
            <!-- /content -->
        </div>
        <!-- /cols -->
        <hr class="noscreen"/>
    </form>
@endsection

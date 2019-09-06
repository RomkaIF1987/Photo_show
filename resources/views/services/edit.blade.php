@extends('adminPanel.layouts.app')

@section('content')
    <form action="{{route('service.update', $service->id)}}" method="POST" class="was-validated button">
    @csrf
    <!-- /header -->
        <hr class="noscreen"/>
        <!-- Columns -->
        <div id="cols" class="box">
            <hr class="noscreen"/>
            <!-- Content (Right Column) -->
            <div id="content" class="box">
                <!-- Form -->
                <h3 class="tit">Редагувати послугу</h3>

                @method('PATCH')

                @include('services.partials.form')

            </div>
            <!-- /content -->
        </div>
        <!-- /cols -->
        <hr class="noscreen"/>
    </form>
@endsection

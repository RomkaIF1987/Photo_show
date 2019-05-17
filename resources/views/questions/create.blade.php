@extends('adminPanel.layouts.app')

@section('content')
    <form action="{{route('question.store')}}" method="POST"
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
                <h3 class="tit">Додати питання</h3>

                @include('questions.partials.questionForm')

            </div>
            <!-- /content -->
        </div>
        <!-- /cols -->
        <hr class="noscreen"/>
    </form>
@endsection

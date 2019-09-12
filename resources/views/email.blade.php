@extends('layouts.app')

@section('content')

    <h2 class="text-center button">НАПИШІТЬ І МИ ВАМ ПЕРЕДЗВОНИМО</h2>
    <div>
        <form class="button" action="{{route('postEmail')}}" method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">Введіть імʼя</label>
                <input type="text" class="form-control" id="name" placeholder="Введіть імʼя">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Введіть номер контактного телефону</label>
                <input type="text" class="form-control" id="phone_number"
                       placeholder="Введіть номер контактного телефону">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Напишіть що саме Вас зацікавило</label>
                <textarea type="text" class="form-control" id="description"
                          placeholder="Напишіть що саме Вас зацікавило"></textarea>
            </div>
            <button type="submit" class="btn-primary btn-lg" value="Відправити">Відправити</button>
        </form>
    </div>
@endsection

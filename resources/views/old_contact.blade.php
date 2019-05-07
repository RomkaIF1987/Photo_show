@extends('layouts.old_app')

@section('content')
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.7499666450385!2d24.7227097152931!3d48.93920397929542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4c6517ea7c353ae!2z0KXQhtCi0JAsINCh0J8g0KLQl9Ce0JI!5e0!3m2!1suk!2sua!4v1547315773315"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container contact">
        <div class="row">
            <div class="col-md-8 col-xs-12 padding-right-0 button">
                <div>Івано-Франківськ</div>
                <div>Вулиця Максимовича, 14а</div>
            </div>
            <div class="col-md-6 col-xs-12 padding-left-0 mobile-padding button">
                <div class="company-phone icon icon-phone">
                    <div>+38 (0342) 56-09-44</div>
                    <div>+38 (0342) 77-71-00</div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 button ">
                <div class="company__table-wrap">
                    <table class="table-bordered" style="width:100%">
                        <thead class="thead-light table">
                        <tr class="text-center">
                            <th scope="col">День</th>
                            <th scope="col">Години роботи</th>
                            <th scope="col">Перерва</th>
                        </tr>
                        </thead>
                        <tr class="text-center">
                            <td>Пн,Вт,Ср,Чт,Пт</td>
                            <td>08:00 - 17:00</td>
                            <td>12:00 - 13:00</td>
                        </tr>
                        <tr class="text-center">
                            <td>Сб,Нд</td>
                            <td colspan="2">Вихідний</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="{{route('getEmail')}}">НАПИШІТЬ НАМ І МИ ПЕРЕДЗВОНИМО</a>
    </div>
@endsection
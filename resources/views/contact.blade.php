@extends('layouts.app')

@section('content')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url(storage/images/1.jpg);"
         data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h1>Контакти</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container site-section block-13 testimonial-wrap">
        <div class="row no-gutters d-md-flex">
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.801709721103!2d24.724003315134947!3d48.93821850303748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730c1a17e9e8ebf%3A0xc4c6517ea7c353ae!2z0KXQhtCi0JAsINCh0J8g0KLQl9Ce0JI!5e0!3m2!1suk!2sua!4v1568111512982!5m2!1suk!2sua"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-3 text-lg-center ml-5 p-4 contact-inf">

                <h3 class="my-4 pb-2">Контактна інформація</h3>
                <p><i class="fas fa-map-marker-alt pr-2"><span class="icon-address-book"></span></i>вулиця Богдана
                    Хмельницького, 59 Б, Івано-Франківськ, Івано-Франківська область, 76000</p>
                <p type="tel"><a href="tel:+38 099 095 1697"><i class="fas fa-phone pr-2"><span
                                class="icon-phone"></span></i>+38 099 095 1697</a></p>
                <p><a href="mailto:hita@gmail.com"><i class="fas fa-envelope pr-2"><span
                                class="icon-envelope"></span></i>hita@gmail.com</a></p>
                <div>
                    <a href="https://www.facebook.com/XITA95/" class="pl-0 pr-3"><span
                            class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12">

                    <h2 class="site-heading text-black mb-5">Скажи <strong>Привіт</strong></h2>

                    <form action="{{route('contacts.store')}}" method="POST" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="name">Ім'я</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Василюк Василь">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Електронна пошта</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="tel">Номер телефону</label>
                                <input type="tel" name="phone" id="tel" class="form-control" placeholder="050 111 11 11">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Повідомлення</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                          placeholder="Напишіть Ваше повідомлення"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Надіслати" class="btn btn-primary rounded-0 btn-lg">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

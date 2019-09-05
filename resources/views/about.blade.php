@extends('layouts.app')

@section('content')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url(storage/images/1.jpg);"
         data-aos="fade"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h1>Про нас</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section about-section">
        <div class="container">
            <div class="row align-items-center mb-5 pb-5">
                <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <span class="experience">
              <span class="years"><script>document.write((new Date().getFullYear()) - 1996);</script> роки</span>
              <span class="caption">ДОСВІДУ</span>
            </span>
                    <img src="/storage/images/5.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 ml-auto">
                    <h3 class="mb-4">Архітектурний дизайн</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fuga ipsum
                        commodi aliquid aspernatur reiciendis enim cum voluptas id itaque, asperiores modi, voluptatibus
                        sed voluptate nulla et ratione aliquam! Quaerat.</p>
                </div>
            </div>


        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="sub-title">Зустрічайте нашу команду</span>
                    <h2 class="font-weight-bold text-black mb-5">Наша Команда</h2>
                </div>
            </div>
            <div class="row">

                @foreach($employees as $employee)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="person">
                            <div class="bio-img">
                                <figure>
                                    <img src="storage/images/{{$employee->image}}" alt="Image" class="img-fluid">
                                </figure>
                                @if($employee->facebook != null || $employee->twitter != null || $employee->instagram != null)
                                    <div class="social">
                                        @if($employee->facebook != null)
                                            <a href="{{$employee->facebook}}"><span class="icon-facebook"></span></a>
                                        @endif
                                        @if($employee->twitter != null)
                                            <a href="{{$employee->twitter}}"><span class="icon-twitter"></span></a>
                                        @endif
                                        @if($employee->instagram != null)
                                            <a href="{{$employee->instagram}}"><span class="icon-instagram"></span></a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <h2>{{$employee->name}}</h2>
                            <span class="sub-title">{{$employee->position}}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <div class="site-half">
        <div class="img-bg-1" style="background-image: url('images/hero_bg_1.jpg');"></div>
        <div class="container">
            <div class="row no-gutters align-items-stretch">
                <div class="col-md-12 col-lg-7 ml-lg-auto py-5">
                    <span class="sub-title">Архітектурний дизайн</span>
                    <h2 class="font-weight-bold text-black font-secondary mb-4">Чому вибирають нас</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis
                        voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis
                        nesciunt veniam qui fugit doloremque numquam quod.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora
                        distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>

                    <ul class="list-unstyled ul-check primary">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Consectetur tempora distinctio ipsam</li>
                        <li>Recusandae repellendus asperiores amet</li>
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Consectetur tempora distinctio ipsam</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

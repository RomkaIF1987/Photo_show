@extends('layouts.app')

@section('content')

  <div class="site-blocks-cover overlay" style="background-image: url(storage/images/1.jpg);" data-aos="fade"
       data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center text-center justify-content-center">
        <div class="col-md-8">
          <span class="sub-text">Елітні вироби з масиву дерева</span>
          <h1>ФАБРИКА МЕБЛІВ ТА ДВЕРЕЙ "ХІТА"</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-block-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a href="{{route('projects', ['album' => 1])}}" class="site-block-feature d-flex p-4 rounded mb-4">
            <div class="mr-3">
              <span class="icon flaticon-cupboard font-weight-light h2"></span>
            </div>
            <div class="text">
              <h3>Меблі</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{route('projects', ['album' => 2])}}" class="site-block-feature d-flex p-4 rounded mb-4">
            <div class="mr-3">
              <span class="icon flaticon-door font-weight-light h2"></span>
            </div>
            <div class="text">
              <h3>Двері</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{route('projects', ['album' => 3])}}" class="site-block-feature d-flex p-4 rounded mb-4">
            <div class="mr-3">
              <span class="icon flaticon-window font-weight-light h2"></span>
            </div>
            <div class="text">
              <h3>Вікна</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="storage/images/4.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 ml-auto">
          <span class="sub-title">Чому ми</span>
          <h2 class="font-weight-bold text-black mb-5">Чому ми</h2>
          <div class="accordion" id="accordionExample">

            <h2 class="mb-0 border rounded mb-2">
              <button class="btn " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                1. What Should I Do If My Interior Broken?
              </button>
            </h2>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, <a href="#">Cnsectetur adipisicing</a> elit. Eos quos incidunt,
                  perspiciatis, ad saepe, magnam error adipisci vitae ut provident alias! Odio debitis error ipsum
                  molestiae voluptas accusantium quibusdam animi, soluta explicabo asperiores aliquid, modi natus
                  suscipit deleniti. Corrupti, autem.</p>
              </div>
            </div>

            <h2 class="mb-0 border rounded mb-2">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">
                2. What Is Your Location?
              </button>
            </h2>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate animi hic quasi sequi
                  odio, vitae dolorum soluta sapiente debitis ad similique tempore, aliquam quae nam deserunt dicta
                  ullam perspiciatis minima, quam. Quis repellat corporis aperiam, veritatis nemo iure inventore.</p>
              </div>
            </div>

            <h2 class="mb-0 border rounded mb-2">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">
                3. Robus Building
              </button>
            </h2>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum et dolorum libero consequuntur facere
                  molestias beatae quod labore quidem ad quasi eius pariatur quae nam quo soluta optio dicta, doloribus
                  ullam fugit nulla! Itaque necessitatibus eum sed quam eos id!</p>
              </div>
            </div>

            <h2 class="mb-0 border rounded mb-2">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseFour">
                4. What Is Your Main Services?
              </button>
            </h2>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quos incidunt, perspiciatis, ad saepe,
                  magnam error adipisci vitae ut provident alias! Odio debitis error ipsum molestiae voluptas
                  accusantium quibusdam animi, soluta explicabo asperiores aliquid, modi natus suscipit deleniti.
                  Corrupti, autem.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="container site-section block-13 testimonial-wrap">

    <div class="row">
      <div class="col-12 text-center">
        <span class="sub-title">Щасливі клієнти</span>
        <h2 class="font-weight-bold text-black mb-5">Відгуки</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-carousel">
      @foreach($comments as $comment)
        <div class="testimony">
          <img src="storage/images/{{$comment->image}}" alt="Image" class="img-fluid">
          <h3>{{$comment->name}}</h3>
          <span class="sub-title">Owner of Building Co.</span>
          <p>&ldquo;<em>{{$comment->description}}</em>&rdquo;</p>
        </div>
      @endforeach
      <div class="testimony">
        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
        <h3>Nathalie Channie</h3>
        <span class="sub-title">Owner of Building Co.</span>
        <p>&ldquo;<em>Eveniet, laboriosam impedit facilis. Voluptatem, repudiandae eligendi maiores sunt itaque, dolores
            voluptas labore perferendis, illum tenetur suscipit vero officia. Quaerat facilis cum ex a labore iusto,
            beatae fuga nam rem, quos vel aliquam nobis.</em>&rdquo;</p>
      </div>

      <div class="testimony">
        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
        <h3>Will Turner</h3>
        <span class="sub-title">Owner of Building Co.</span>
        <p>&ldquo;<em>Laboriosam nisi natus quos soluta blanditiis iste in distinctio fugiat perferendis, architecto
            eveniet provident, consequatur dolore ab nihil voluptatibus laborum magnam cum assumenda nobis, nam quam
            quae! Unde porro laboriosam nam qui! Eligendi, qui!</em>&rdquo;</p>
      </div>

      <div class="testimony">
        <img src="images/person_4.jpg" alt="Image" class="img-fluid">
        <h3>Nicolas Stainer</h3>
        <span class="sub-title">Owner of Building Co.</span>
        <p>&ldquo;<em>Voluptatibus sed vero corporis reiciendis, ducimus iste aliquam doloribus voluptas nam quo
            assumenda perferendis excepturi accusantium, ipsam minus tempora earum exercitationem laborum. Delectus
            voluptate quaerat repellat obcaecati. Qui nemo ad similique facere modi dolores.</em>&rdquo;</p>
      </div>
    </div>
  </div>

  <div class="site-section site-block-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="img-border">
            <img src="storage/images/2.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row row-items">
            <div class="col-6">
              <a href="#" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-cupboard display-3"></span>
                    </span>
                    <h3>Меблі</h3>
                  </span>
              </a>
            </div>
            <div class="col-6">
              <a href="#" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-door display-3"></span>
                    </span>
                    <h3>Двері</h3>
                  </span>
              </a>
            </div>
          </div>
          <div class="row row-items last">
            <div class="col-6">
              <a href="#" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-window display-3"></span>
                    </span>
                    <h3>Вікна</h3>
                  </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <span class="sub-title">News &amp; Update</span>
          <h2 class="font-weight-bold text-black mb-5">Our Blog Posts</h2>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-2">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-2">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-2">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>

      </div>
      <div class="row mt-5 text-center">
        <div class="col-12">
          <p><a href="#" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection

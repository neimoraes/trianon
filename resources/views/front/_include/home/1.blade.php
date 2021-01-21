<div id="demo" class="carousel slide">

  <!-- Indicators -->
  <ul class="carousel-indicators display-lg">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner link-greentowhite-text-tn link-bggrayturngreen-tn">

    <div class="carousel-item active">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\topocovidantigeno.jpg') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center justify-content-end h-100">
              <div class="flex-shrink">
                  <h1 class="green-text-tn"></h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('news.post5') !!}"><p class="h3">Veja Mais!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-dark py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="green-text-tn h2">Teste rápido COVID-19 antígeno</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('news.post5') !!}"><p class="h3">Veja Mais!</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\outubronovembro.jpg') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="black-text-tn">Outubro Rosa & Novembro Azul</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('news.post4') !!}"><p class="h3">Fique em dia com a sua saúde!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-dark py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="green-text-tn h2">Outubro Rosa & Novembro Azul</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('news.post4') !!}"><p class="h3">Fique em dia com a sua saúde!</p></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\toposite_examecovid.jpg') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="black-text-tn">Está com dúvida sobre qual exame de covid realizar?</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('news.post3') !!}"><p class="h3">Veja Mais!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-dark py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="green-text-tn h2">Está com dúvida sobre qual exame de covid realizar?</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('news.post3') !!}"><p class="h3">Veja Mais!</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\testerapido.jpg') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="black-text-tn">Realizamos teste rápido para Covid-19</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('news.post3') !!}"><p class="h3">Confira!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-white py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="black-text-tn h2">Realizamos teste rápido para Covid-19</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('news.post2') !!}"><p class="h3">Confira!</p> </a>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\corona_tn.jpg') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="green-text-tn">Todos juntos contra o coronavírus</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('news.post') !!}"><p class="h3">Colabore!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-dark py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="green-text-tn h2">Todos juntos contra o coronavírus</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('news.post') !!}"><p class="h3">Colabore!</p> </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100" src="{!! asset('img\carousel_1.png') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="text-dark">Exames Laboratoriais</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('front.results') !!}"><p class="h3">Veja seu Resultado!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-blue-tn py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="text-white h2">Exames Laboratoriais</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn bg-light" href="{!! route('front.results') !!}"><p class="h3 blue-text-tn">Veja seu Resultado!</p></a>
            </div>
          </div>
        </div>
      </div>
        </div>

    {{-- <div class="carousel-item">
      <div class="d-none d-lg-block">
        <img class="img-fluid w-100 bg-black-tn " src="{!! asset('img\gestante_tn.png') !!}" alt="">
        <div class="position-absolute d-none d-md-block carousel-sub-tn h-100 w-100">
          <div class="container h-100">
            <div class="d-flex align-items-center h-100">
              <div class="flex-shrink">
                  <h1 class="text-light">Gestantes</h1>
                  <a class="btn btn-lg w-100 roboto-slab-tn" href="{!! route('pacientes.gestante') !!}"><p class="h3">Confira!</p> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-lg-none">
        <div class="bg-dark py-5">
          <div class="container d-flex justify-content-center">
            <div class="flex-shrink">
              <h1 class="green-text-tn h2">Gestantes</h1>
              <a class="btn btn-sm w-100 roboto-slab-tn" href="{!! route('pacientes.gestante') !!}"><p class="h3">Confira!</p> </a>
            </div>
          </div>
        </div>
      </div>
        </div> --}}


  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

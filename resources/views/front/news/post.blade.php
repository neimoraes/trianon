@extends('front.layout.app', ['title'=>null, 'description'=>null])
@section('content')

  <div class="position-relative">
    <img class="img-fluid w-100" src="{!! asset('img\corona_tn.jpg') !!}" alt="">
    <div class="position-absolute w-100 h-100 overlay-about-tn">
      <div class="container h-100 w-100">
        <div class="w-100 h-100 d-flex align-items-center">
          <div class="roboto-slab-tn">
            <h1>Todos juntos contra o coronavírus</h1>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container py-5">
    <img class="img-fluid" src="{!! asset('img/cartazcorona_tn.png') !!}" alt="">
  </div>








@include ('front._include.home.news_homepanel')
@include ('front._include.home.4')
@endsection

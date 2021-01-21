@extends('front.layout.app', ['title'=>null, 'description'=>null])
@section('content')

  <div class="position-relative">
    <img class="img-fluid w-100" src="{!! asset('img\testerapido.jpg') !!}" alt="">
    <div class="position-absolute w-100 h-100 overlay-about-tn">
      <div class="container h-100 w-100">
        <div class="w-100 h-100 d-flex align-items-center">
          <div class="roboto-slab-tn">
            <h1>Realizamos TESTE RÁPIDO para Covid-19</h1>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container py-5">

    <h2 class="pb-4">O LABORATÓRIO TRIANON INFORMA QUE ESTÁ REALIZANDO TESTES RÁPIDOS PARA COVID-19.</h2>
    <div class="pb-4 d-flex justify-content-center">
      <img style="max-height: 500px;" class="img-fluid" src="{!! asset('img/testerapido_mobile.jpeg') !!}" alt="o laboratório trianon realiza testes rápidos para covid-19">
    </div>
    <p class="whitespace-tn">Os testes disponíveis são registrados pela ANVISA, e o mais importante: VALIDADOS pelo Ministério da Saúde e pelo Laboratório de apoio Hermes Pardini.
    A previsão de entrega dos resultados nas unidades de Dracena e Tupi Paulista é de 1-2 horas após coleta. Nas unidades de Junqueirópolis, Panorama e Brasilândia (MS), a previsão de entrega é de 4-6 horas após coleta.
    </p>


    <p class="whitespace-tn">Os interessados deverão apresentar no momento da coleta documento com foto.
    Além do teste rápido, temos a disposição a sorologia pela metodologia quimioluminescência com previsão de entrega de 2-3 dias úteis.
    Também estamos realizando o PCR-RT para COVID-19 (com pedido médico), que deve ser agendado em qualquer uma das unidades.
    Pedidos pela UNIMED devem ser autorizados antes da coleta.</p>


  </div>
@include ('front._include.home.news_homepanel')
@include ('front._include.home.4')
@endsection

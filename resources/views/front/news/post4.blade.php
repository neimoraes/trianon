@extends('front.layout.app', ['title'=>null, 'description'=>null])
@section('content')

  <div class="position-relative">
    <img class="img-fluid w-100  display-lg" src="{!! asset('img\outubronovembro.jpg') !!}" alt="">
    <img class="img-fluid w-100 display-xs" src="{!! asset('img\branco-bg.jpg') !!}" alt="">
    <div class="position-absolute w-100 h-100 overlay-about-tn">
      <div class="container h-100 w-100">
        <div class="w-100 h-100 d-flex align-items-center">
          <div class="roboto-slab-tn">
            <h1>Outubro Rosa & Novembro Azul</h1>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container py-5">

    <h2 class="pb-4">Na fase inicial, 9 em 10 casos de câncer têm cura. Este é o momento de cuidar ainda mais da sua saúde.</h2>
    <h2 class="pb-4">Aproveite nossas <i class="green-text-tn h1 font-weight-bold"> condições especiais </i> para os meses de Outubro e Novembro e faça agora o checkup laboratorial.</h2>

    <div class="d-flex flex-column text-center overflow-hidden">
      <div class="out-rosa-border-tn borderradius-tn">
        <div class="out-rosa-border-bottom-tn w-100 mb-4">
          <h2 class="py-4 font-weight-bold">Check-up da mulher:</h2>
        </div>

        <div class="d-flex  justify-content-center pb-4 px-2 ">
          <div class="text-left mr-2">
            <p class="h4">•	TSH ultra sensível</p>
            <p class="h4">•	Creatinina</p>
            <p class="h4">•	Hemograma</p>
            <p class="h4">•	Transaminase Pirúvica</p>
            <p class="h4">•	Transaminase Oxalacética</p>
            <p class="h4">•	Triglicérides</p>
            <p class="h4">•	Colesterol total e frações</p>
            <p class="h4">•	T4 Livre</p>
            <p class="h4">•	Urina rotina</p>
          </div>
          <div class="ml-2">
            <div class="card out-rosa-bg-tn">
              <div class="card-body out-rosa-border-tn borderradius-tn ">
                <h3 class="pb-4 font-weight-bold">Exames complementares:</h3>
                <div class="text-left pl-2">
                  <p class="h4">•	FSH</p>
                  <p class="h4">•	LH</p>
                  <p class="h4">•	Estradiol</p>
                  <p class="h4">•	Prolactina</p>
                  <p class="h4">•	Citologia Oncótica</p>
                </div>


              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="nov-azul-border-tn borderradius-tn mt-4">
        <div class="nov-azul-border-bottom-tn w-100 mb-4">
          <h2 class="py-4 font-weight-bold">Check-up do Homem:</h2>
        </div>
        <div class="d-flex justify-content-center pb-4 px-2 ">
          <div class="text-left mr-2">
            <p class="h4">•	TSH ultra sensível</p>
            <p class="h4">•	PSA ultra sensível</p>
            <p class="h4">•	Creatinina</p>
            <p class="h4">•	Hemograma</p>
            <p class="h4">•	Transaminase Pirúvica</p>
            <p class="h4">•	Transaminase Oxalacética</p>
            <p class="h4">•	Ácido Úrico</p>
            <p class="h4">•	Triglicérides</p>
            <p class="h4">•	Glicemia jejum</p>
            <p class="h4">•	Colesterol total e frações</p>
            <p class="h4">•	T4 Livre</p>
            <p class="h4">•	Urina rotina</p>
          </div>
          <div class="ml-2">
            <div class="card out-rosa-bg-tn">
              <div class="card-body nov-azul-border-tn borderradius-tn ">
                <h3 class="pb-4 font-weight-bold">Exames complementares:</h3>
                <div class="text-left pl-2">
                  <p class="h4">•	Testosterona</p>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
@include('front._include.contact.3')
@include ('front._include.home.news_homepanel')
@include ('front._include.home.4')
@endsection

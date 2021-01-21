@extends('front.layout.app', ['title'=>'Teste Rápido COVID-19 Antígeno - Laboratório Trianon', 'description'=>'Resultado em 30 minutos. Indicado para pacientes sintomáticos com até 5 dias de sintomas. Laboratório Trianon, unidades em Dracena, Junqueirópolis, Panorama, Brasilândia, Tupi Paulista.'])
@section('content')

  <div class="position-relative">
    <img class="img-fluid w-100" src="{!! asset('img\topocovidantigeno.jpg') !!}" alt="">
    <div class="position-absolute w-100 h-100">
      <div class="container h-100 w-100">
        <div class="w-100 h-100 d-flex align-items-center">
          <div class="roboto-slab-tn">
          </div>
        </div>
      </div>

    </div>
  </div>
<div class="container py-5">
    <h2 class="pb-3">Teste Rápido COVID-19 Antígeno</h2>
  <div class="steps overflow-hidden mb-4 pt-1">
    <div class="step mt-0 text-black">
      <div>
        <div class="circle"></div>
      </div>
      <div>
        <div class="title font-weight-bold"><h3 class="line-0 mb-0 mt--1 text-uppercase">Procedimento</h3> </div>
        <div class="caption py-3">

            <h5>  Teste realizado por meio de um ensaio imunocromatográfico, para detecção qualitativa de antígenos de SARS-CoV-2 em amostras de swab da nasofaringe.</h5>

            <h5>  O Teste Rápido COVID-19 Antígeno deve ser realizado até o 7º dia do início dos sintomas da COVID-19, preferencialmente até o 5º dia, desde que suas restrições sejam conhecidas e os resultados interpretados corretamente por um médico.
            </h5>
            <h5> É importante ressaltar que o Teste Rápido COVID-19 Antígeno possui menor sensibilidade do que os testes que detectam ácido nucleico pela técnica de RT-PCR, sendo o RT-PCR considerado o padrão-ouro para diagnóstico de SAR-CoV2.</h5>


        </div>
      </div>
    </div>
    <div class="step mt-0 text-black">
      <div>
        <div class="circle"></div>
      </div>
      <div>
        <div class="title font-weight-bold"><h3 class="line-0 mb-0 mt--1 text-uppercase">Indicação</h3> </div>
        <div class="caption py-3">
          <h4 class="py-2 font-weight-bold">O Teste Rápido COVID-19 Antígeno é indicado para:</h4>

          <h5>- Pacientes com até 7 dias após o início dos sintomas, preferencialmente até o 5º dia.</h5>

          <h5>- Esse teste pode ser utilizado para auxiliar no diagnóstico do COVID-19 em pacientes sintomáticos na fase aguda da doença.</h5>
        </div>
      </div>
    </div>
    <div class="step mt-0 text-black">
      <div>
        <div class="circle"></div>
      </div>
      <div>
        <div class="title"><h3 class="line-0 mb-0 mt--1 text-uppercase">Sobre o Covid-19</h3> </div>
        <div class="caption py-3">
          <h4 class="py-2 font-weight-bold">O que é o Coronavírus - COVID-19?</h4>

          <h5>A doença pelo coronavírus 2019 (COVID-19) é uma infecção causada pelo coronavírus 2 da síndrome respiratória aguda grave (SARS-CoV-2), cujo espectro clínico pode variar de infecções assintomáticas a quadros respiratórios graves.</h5>

          <h4 class="py-2 font-weight-bold">Como é realizado o teste?</h4>

          <h5>O Teste Rápido COVID-19 Antígeno é realizado a partir de amostra coletada por swab de nasofaringe.</h5>

            <h5>O procedimento é realizado por profissionais capacitados, obedecendo à conduta de manuseio estabelecida por protocolos do Ministério da Saúde.</h5>

            <h5>O resultado do Teste Rápido COVID-19 Antígeno é liberado 30 minutos após a coleta.</h5>

          <h4 class="py-2 font-weight-bold">Como se prevenir do contágio da COVID-19?</h4>

          <h5>- Lave frequentemente as mãos com água e sabão ou use álcool em gel;</h5>
          <h5>- Ao tossir ou espirrar, cubra o nariz e a boca com lenço ou com o braço;</h5>
          <h5>- Se possível, fique em casa e evite aglomerações;</h5>
          <h5>- Mantenha os ambientes bem ventilados;</h5>
          <h5>- Não compartilhe objetos pessoais.</h5>
        </div>
      </div>
    </div>
  </div>

    {{-- <ul class="nav nav-tabs bg-white post-nav" id="myTab" role="tablist">
      <li class="nav-item " role="presentation">
        <a class="nav-link active bg-white" id="procedimento-tab" data-toggle="tab" href="#procedimento" role="tab" aria-controls="procedimento" aria-selected="true">Procedimento</a>
      </li>
      <li class="nav-item " role="presentation">
        <a class="nav-link bg-white" id="indicacao-tab" data-toggle="tab" href="#indicacao" role="tab" aria-controls="indicacao" aria-selected="false">Indicação</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link bg-white" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sobre o Covid-19</a>
      </li>
    </ul>

    <div class="tab-content  px-5 py-3" id="myTabContent">
      <div class="tab-pane fade show active bg-white" id="procedimento" role="tabpanel" aria-labelledby="home-tab">
        <h5>  Teste realizado por meio de um ensaio imunocromatográfico, para detecção qualitativa de antígenos de SARS-CoV-2 em amostras de swab da nasofaringe.</h5>

        <h5>  O Teste Rápido COVID-19 Antígeno deve ser realizado até o 7º dia do início dos sintomas da COVID-19, preferencialmente até o 5º dia, desde que suas restrições sejam conhecidas e os resultados interpretados corretamente por um médico.
</h5>
        <h5> É importante ressaltar que o Teste Rápido COVID-19 Antígeno possui menor sensibilidade do que os testes que detectam ácido nucleico pela técnica de RT-PCR, sendo o RT-PCR considerado o padrão-ouro para diagnóstico de SAR-CoV2.</h5>

      </div>
      <div class="tab-pane fade bg-white" id="indicacao" role="tabpanel" aria-labelledby="profile-tab">
          <h5 class="card-title">O Teste Rápido COVID-19 Antígeno é indicado para:</h5>

          <p>- Pacientes com até 7 dias após o início dos sintomas, preferencialmente até o 5º dia.</p>

          <p>- Esse teste pode ser utilizado para auxiliar no diagnóstico do COVID-19 em pacientes sintomáticos na fase aguda da doença.</p>
      </div>
      <div class="tab-pane fade bg-white" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        O que é o Coronavírus - COVID-19?

        A doença pelo coronavírus 2019 (COVID-19) é uma infecção causada pelo coronavírus 2 da síndrome respiratória aguda grave (SARS-CoV-2), cujo espectro clínico pode variar de infecções assintomáticas a quadros respiratórios graves.

        Como é realizado o teste?

          O Teste Rápido COVID-19 Antígeno é realizado a partir de amostra coletada por swab de nasofaringe.

          O procedimento é realizado por profissionais capacitados, obedecendo à conduta de manuseio estabelecida por protocolos do Ministério da Saúde.

          O resultado do Teste Rápido COVID-19 Antígeno é liberado 30 minutos após a coleta.

        Como se prevenir do contágio da COVID-19?

        - Lave frequentemente as mãos com água e sabão ou use álcool em gel;
        - Ao tossir ou espirrar, cubra o nariz e a boca com lenço ou com o braço;
        - Se possível, fique em casa e evite aglomerações;
        - Mantenha os ambientes bem ventilados;
        - Não compartilhe objetos pessoais.
      </div>
    </div> --}}


  </div>
@include('front._include.contact.3')
@include ('front._include.home.news_homepanel')
@include ('front._include.home.4')
@endsection

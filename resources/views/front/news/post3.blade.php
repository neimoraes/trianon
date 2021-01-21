@extends('front.layout.app', ['title'=>null, 'description'=>null])
@section('content')

  <div class="position-relative">
    <img class="img-fluid w-100" src="{!! asset('img\toposite_examecovid.jpg') !!}" alt="">
    <div class="position-absolute w-100 h-100 overlay-about-tn">
      <div class="container h-100 w-100">
        <div class="w-100 h-100 d-flex align-items-center">
          <div class="roboto-slab-tn">
            <h1>Está com dúvida sobre qual exame de covid realizar?</h1>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container py-5">
    <h3 class="pb-4">Recomendações de acordo com a evolução dos sintomas:</h3>
    <div class="steps overflow-hidden mb-4">
      <div class="step mt-0">
        <div>
          <div class="circle"></div>
        </div>
        <div>
          <div class="title">PRIMEIRA SEMANA DO INÍCIO DOS PRIMEIROS SINTOMAS</div>
          <div class="caption">
            <div class="d-flex">

              <div class="card cardteste1 m-2">
                <div class="card-header border-0"><h5>Teste - Molecular</h5></div>
              </div>

              <div class="card cardteste6 m-2">
                <div class="card-header"><h5>Teste rápido - Pesquisa de antígeno</h5> </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="step mt-0">
        <div>
          <div class="circle"></div>
        </div>
        <div>
          <div class="title">ENTRE 8 E 14 DIAS</div>
          <div class="caption">
            <div class="d-flex flex-wrap py-2">

              <div class="card cardteste2 m-2">
                <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgM e IgG</h5> </div>
              </div>

              <div class="card mb-3 cardteste3 m-2">
                <div class="card-header"><h5>Teste - Pesquisa de Anticorpos Totais (IgA, IgM e IgG - sem diferenciação)</h5> </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="step mt-0">
        <div>
          <div class="circle"></div>
        </div>
        <div>
          <div class="title">ENTRE 15 E 20 DIAS</div>
          <div class="caption">
            <div class="d-flex flex-wrap py-2">

              <div class="card cardteste2 m-2">
                <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgM e IgG</h5> </div>
              </div>

              <div class="card mb-3 cardteste3 m-2">
                <div class="card-header"><h5>Teste - Pesquisa de Anticorpos Totais (IgA, IgM e IgG - sem diferenciação)</h5> </div>
              </div>


              <div class="card mb-3 cardteste4 m-2">
                <div class="card-header"><h5>Teste - Rápido e Qualitativo – IgG e IgM anti-COVID-19</h5> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step mt-0">
        <div>
          <div class="circle"></div>
        </div>
        <div>
          <div class="title">MAIS DE 20 DIAS APÓS O INÍCIO DOS PRIMEIROS SINTOMAS</div>
          <div class="caption">
            <div class="d-flex flex-wrap py-2">

              <div class="card cardteste2 m-2">
                <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgM e IgG</h5> </div>
              </div>

              <div class="card mb-3 cardteste3 m-2">
                <div class="card-header"><h5>Teste - Pesquisa de Anticorpos Totais (IgA, IgM e IgG - sem diferenciação)</h5> </div>
              </div>

              <div class="card mb-3 cardteste5 m-2">
                <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgG</h5> </div>
              </div>

              <div class="card mb-3 cardteste4 m-2">
                <div class="card-header"><h5>Teste - Rápido e Qualitativo – IgG e IgM anti-COVID-19</h5> </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="py-4">Testes - COVID-19</h3>
    <div class="row cardheaderheight">
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste1 h-100 w-100">
          <div class="card-header"><h5>Teste - Molecular</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">O exame é feito em material coletado da garganta e do nariz por meio de técnicas de biologia molecular (RT-PCR) para o diagnóstico de infecção por coronavírus.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Pacientes sintomáticos na fase aguda.</p>
            <p class="card-text">Avaliação de profissionais de saúde.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste6  h-100 w-100">
          <div class="card-header"><h5>Teste rápido - Pesquisa de antígeno</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">São testes rápidos imunocromatográficos que detectam a presença de antígeno do vírus SARS-CoV-2 com material coletado do  nariz. Possibilita uma triagem inicial e outros testes devem ser realizados para confirmação da infecção.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Pacientes sintomáticos na fase aguda (3 a 6 dias de sintomas) em que não há disponibilidade de realização de RT-PCR.</p>
            <p class="card-text">Resultados não reagentes não excluem a possibilidade de infecção pois o exame é dependente da quantidade de antígeno do vírus SARS-CoV-2 do material coletado.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste2  h-100 w-100">
          <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgM e IgG</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">Testes sorológicos realizados em amostra de sangue para pesquisa quantitativa de anticorpos IgM e IgG anti-SARS-CoV-2 pelo método de quimioluminescência.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Pacientes sintomáticos na fase tardia, (a partir do 8º dia do início dos sintomas, preferencialmente após o 14º dia) com SARS-CoV-2 não detectado ou se RT-PCR indisponível.</p>
            <p class="card-text">Avaliação de retorno ao trabalho de profissionais da saúde.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste3  h-100 w-100">
          <div class="card-header"><h5>Teste - Pesquisa de Anticorpos Totais (IgA, IgM e IgG - sem diferenciação)</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">Testes sorológicos realizados em amostra de sangue para a pesquisa de anticorpos totais (IgA, IgM e IgG) anti-SARS-CoV-2 pelo método de quimioluminescência.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Pacientes sintomáticos na fase tardia (a partir do 8º dia do início dos sintomas, preferencialmente após o 14º dia) com SARS-CoV-2 não detectado ou se RT-PCR indisponível.</p>
            <p class="card-text">Avaliação de retorno ao trabalho de profissionais de saúde.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste4  h-100 w-100">
          <div class="card-header"><h5>Teste - Rápido e Qualitativo – IgG e IgM anti-COVID-19</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">São testes rápidos imunocromatográficos para identificação qualitativa de anticorpos IgM e IgG anti-SARS-CoV-2 em amostra de sangue.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Pacientes sintomáticos na fase tardia, a partir do 14º dia do início dos sintomas com SARS-CoV-2 não detectado ou se RT-PCR indisponível.</p>
            <p class="card-text">Avaliação de retorno ao trabalho de profissionais da saúde.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 py-4">
          <div class="card mb-3 cardteste5  h-100 w-100">
          <div class="card-header"><h5>Teste – Sorologia para COVID-19 ANTICORPOS anti-SARS-CoV-2 IgG</h5> </div>
          <div class="card-body">
            <h5 class="card-title">O que é?</h5>
            <p class="card-text">Teste sorológico realizado em amostra de sangue para pesquisa quantitativa de anticorpos IgG anti-SARS-CoV-2, pelo método de quimioluminescência.</p>
            <h5 class="card-title">Indicação</h5>
            <p class="card-text">Avaliação tardia (após 20 dias) de soro conversão em pacientes com COVID-19 confirmada ou suspeita.</p>
            <p class="card-text">Avaliação da resposta imune em indivíduos expostos ao SARS-CoV-2.</p>
            <p class="card-text">Estudos epidemiológicos.</p>
          </div>
        </div>
      </div>
    </div>


    </div>
@include ('front._include.home.news_homepanel')
@include ('front._include.home.4')
@endsection


<nav id="main-nav" class="roboto-slab-tn">
  <div class="underline-tn">
    <div class="container">
      <nav class="mobile-tn navbar navbar-light px-0">
        <div class="w-50">
        <a href="{!! route('front.home') !!}"><img class="img-fluid" src="{!! asset('img\trianonnoel.png') !!}" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
  </div>


  <div class="collapse" id="navbarToggleExternalContent">
    <div class="green-bg-tn p-4 row">
      <div class="col d-flex flex-column py-1">
        <a class="text-light h5" href="{!! route('front.home') !!}">Home</a>
        <a class="text-light h5" href="{!! route('front.about') !!}">Sobre Nós</a>
        <a class="text-light h5" href="{!! route('front.results') !!}">Resultados</a>
        <a class="text-light h5" href="{!! route('front.exams') !!}">Exames</a>
        <a class="text-light h5" href="{!! route('front.contact') !!}">Contato</a>
        <a class="text-light h5" href="{!! route('front.links') !!}">Links Úteis</a>
        <a class="text-light h5" href="{!! route('news') !!}">Notícias</a>
        <a class="text-light h5" href="{!! route('front.duvidas') !!}">Dúvidas</a>
        <a class="text-light h5" href="{!! route('front.planos') !!}">Planos de saúde</a>
      </div>
      <div class="col d-flex flex-column py-1">
        <a class="text-light h5" href="{!! route('pacientes.home') !!}">Pacientes</a>
        <a class="text-light" href="{!! route('pacientes.prepare') !!}">Prepare-se</a>
        <a class="text-light" href="{!! route('pacientes.gestante') !!}">Gestantes</a>
        <a class="text-light" href="{!! route('pacientes.dna') !!}">DNA</a>
        <a class="text-light" href="{!! route('pacientes.toxico') !!}">Toxicológico</a>
        <a class="text-light" href="{!! route('pacientes.sexagem') !!}">Sexagem Fetal</a>
        <a class="text-light" href="{!! route('pacientes.plaquetopenia') !!}">Plaquetopenia</a>
      </div>
      <div class="col d-flex flex-column py-1">
        <a class="text-light h5" href="{!! route('front.dracena') !!}">Unidades</a>
        <a class="text-light" href="{!! route('front.dracena') !!}">Dracena</a>
        <a class="text-light" href="{!! route('front.tupi') !!}">Tupi Paulista</a>
        <a class="text-light" href="{!! route('front.junqueiropolis') !!}">Junqueirópolis</a>
        <a class="text-light" href="{!! route('front.panorama') !!}">Panorama</a>
        <a class="text-light" href="{!! route('front.brasilandia') !!}">Brasilândia</a>
      </div>
    </div>
</div>

  </div>

  <div id="pre-nav" class="gray-1-bg-tn gray-2-text-tn">
    <div class="container">
      <div class=" d-flex justify-content-end align-items-center link-graytogreen-text-tn gray-2-text-tn">
        <div class="mr-2">
          Central de Atendimento <a href="tel:+551838213249">(18) 3821-3249</a> e <a href="tel:+551838223066">(18) 3822-3066</a>
        </div>
        <div class="">
          <a href="https://api.whatsapp.com/send?phone=5518997940595"><img class="green-bg-tn p-2" src="{!! asset('icons\whatsapp_icon_tn.png') !!}" alt=""></a>
        </div>

      </div>

    </div>
  </div>
  <div id="main-nav" class="">
    <div class="container ">
      <div class="py-4 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap">
        <div class="w-25 logo-tn">
          <a href="{!! route('front.home') !!}"><img class="img-fluid" src="{!! asset('img\trianonnoel.png') !!}" alt=""></a>
        </div>
        <div class="w-100 flex-lg-fill pt-lg-0 link-bggrayturngreen-tn link-greentowhite-text-tn">
          <div class="d-flex flex-wrap justify-content-between justify-content-lg-end align-items-stretch w-100 nav-links-tn">
            <div class="pr-1 pr-lg-0 pl-lg-3  py-1 py-lg-0 flex-fill">
              <a class="py-2 px-1 btn gray-1-bg-tn noborder-tn w-100 h-100 d-flex align-items-center justify-content-center hoverableicon-tn {{ ($ativa == 'results') ? 'active' : '' }}" href="{!! route('front.results') !!}">
                <img class="pr-1 visibleicon-tn" src="{!! asset('icons\resultados_icon_tn.png') !!}" alt="">
                <img class="pr-1 invisibleicon-tn" src="{!! asset('icons\resultados_icon_active_tn.png') !!}" alt="">
                Resultados
              </a>
            </div>
            <div class="pr-1 pr-lg-0 pl-lg-3  py-1 py-lg-0 flex-fill">
              <a class="py-2 px-1 btn gray-1-bg-tn noborder-tn w-100 h-100 d-flex align-items-center justify-content-center hoverableicon-tn {{ ($ativa == 'exams') ? 'active' : '' }}" href="{!! route('front.exams') !!}">
                <img class="pr-1 visibleicon-tn" src="{!! asset('icons\exames_icon_tn.png') !!}" alt="">
                <img class="pr-1 invisibleicon-tn" src="{!! asset('icons\exames_icon_active_tn.png') !!}" alt="">
                Exames
              </a>
            </div>
            <div class="pr-1 pr-lg-0 pl-lg-3  py-1 py-lg-0 flex-fill">
              <a id="toggleunidade" class="py-2 px-1 btn gray-1-bg-tn noborder-tn w-100 h-100 d-flex align-items-center justify-content-center hoverableicon-tn {{ ($ativa == 'dracena' || $ativa == 'tupi' || $ativa == 'junqueiropolis' || $ativa == 'brasilandia' ||$ativa == 'panorama') ? 'active' : '' }}"
href="{!! route('front.dracena')!!}" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <img class="pr-1 visibleicon-tn" src="{!! asset('icons\laboratorios_icon_tn.png') !!}" alt="">
                <img class="pr-1 invisibleicon-tn" src="{!! asset('icons\laboratorios_icon_active_tn.png') !!}" alt="">
                Unidades
              </a>
            </div>
            <div class="pr-1 pr-lg-0 pl-lg-3  py-1 py-lg-0 flex-fill">
              <a class="py-2 px-1 btn gray-1-bg-tn noborder-tn w-100 h-100 d-flex align-items-center justify-content-center hoverableicon-tn  {{ ($ativa == 'planos') ? 'active' : '' }}" href="{!! route('front.planos') !!}">
                <img class="pr-1 visibleicon-tn" src="{!! asset('icons\medicos_icon_tn.png') !!}" alt="">
                <img class="pr-1 invisibleicon-tn" src="{!! asset('icons\medicos_icon_active_tn.png') !!}" alt="">
                Planos de Saúde
              </a>
            </div>
            <div class="pr-1 pl-lg-3  py-1 py-lg-0 flex-fill">
              <a class="py-2 px-1 btn gray-1-bg-tn noborder-tn w-100 h-100 d-flex align-items-center justify-content-center hoverableicon-tn {{ ($ativa == 'fale') ? 'active' : '' }}" href="{!! route('front.contact') !!}">
                <img class="pr-1 visibleicon-tn" src="{!! asset('icons\agendamentos_icon_tn.png') !!}" alt="">
                <img class="pr-1 invisibleicon-tn" src="{!! asset('icons\agendamentos_icon_active_tn.png') !!}" alt="">
                Fale Conosco
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="navbarToggleExternalContent2">
      <div id="postnav"class="green-bg-tn">
        <div class="container text-light font-weight-bold">
          <div class="d-flex flex-wrap flex-md-nowrap">
            <a class="mr-3 {{($ativa== 'dracena') ? 'active' : '' }}" href="{{route('front.dracena') }}#dracena"><div class="py-3">Dracena</div></a>
            <a class="mr-3 {{($ativa== 'tupi') ? 'active' : '' }}" href="{{ route('front.tupi') }}#tupi"><div class=" py-3">Tupi Paulista</div></a>
            <a class="mr-3 {{($ativa== 'junqueiropolis') ? 'active' : '' }}" href="{{ route('front.junqueiropolis') }}#junqueiropolis"><div class=" py-3">Junqueirópolis</div></a>
            <a class="mr-3 {{($ativa== 'panorama') ? 'active' : '' }}" href="{{ route('front.panorama')}}#panorama"><div class=" py-3">Panorama</div></a>
            <a class="mr-3 {{($ativa== 'brasilandia') ? 'active' : '' }}" href="{{ route('front.brasilandia') }}#brasilandia"><div class=" py-3">Brasilândia</div> </a>
          </div>
        </div>
      </div>
  </div>
<div class="topline-tn">
    <div class="container ">
      <div id="subnav" class="d-flex justify-content-between align-items-center subnav-tn">
        <div class="font-weight-bold flex-fill">
          <div class="d-flex flex-row flex-wrap flex-md-nowrap">
              <a  id="subnav-1-child" class=" subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'pacientes') ? 'active-tn' : '' }} mr-3  green-text-tn " href="{!! route('pacientes.home') !!}">Pacientes</a>
              <a id="subnav-2-child" class="subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'medicos') ? 'active-tn' : '' }} mr-3  green-text-tn " href="{!! route('front.links') !!}">Links Úteis</a>
              <a id="subnav-3-child" class="subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'contact') ? 'active-tn' : '' }} mr-3  green-text-tn" href="{!! route('front.contact') !!}">Contato</a>
              <a id="subnav-4-child" class="subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'about') ? 'active-tn' : '' }} mr-3  green-text-tn " href="{!! route('front.about') !!}">Sobre Nós</a>
              <a id="subnav-6-child" class="subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'news') ? 'active-tn' : '' }} mr-3  green-text-tn " href="{!! route('news') !!}">Notícias</a>
              <a id="subnav-6-child" class="subnav-hovered-tn py-3 mr-3 d-flex align-items-center {{ ($ativa == 'duvidas') ? 'active-tn' : '' }} mr-3  green-text-tn " href="{!! route('front.duvidas') !!}">Dúvidas Frequentes</a>
          </div>

        </div>
        <div class="h-100 link-bgturngreen-tn link-greentowhite-text-tn ">
          <a class="px-4 py-2 borderradius-btn gray-1-bg-tn d-flex align-items-center h-100 transition-tn" href="https://api.whatsapp.com/send?phone=5518997940595">
            <span class="icon3-tn icon-whatsapp-tn mr-1"></span>
            <p class="m-0">WhatsApp</p>
          </a>
        </div>
        <div class="py-3 d-none">
          <div class="search-tn border-bottom">
            <form class="" action="index.html" method="post">
              <button type="button" name="button"><img src="{!! asset('icons\search_icon_tn.png') !!}" alt=""></button>
              <input type="text" name="" value="" placeholder="Encontre">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

</nav>

<div class="footer-tn">
  <div class="gray-1-bg-tn  py-5">
    <div class="container">
      <div class="w-200px">
        <a href="{!! route('front.home') !!}"><img class="img-fluid" src="{!! asset('img\logo_horizontal_tn.png') !!}" alt=""></a>
      </div>
      <div class="d-flex flex-wrap py-5">
        <div class="d-flex flex-column pr-4">
          <a href="{!! route('front.home') !!}" ><u class="green-text-tn"><h6>Home</h6></u></a>
          <a href="{!! route('front.about') !!}" ><u class="green-text-tn"><h6>Sobre Nós</h6></u></a>
          <a href="{!! route('front.results') !!}" ><u class="green-text-tn"><h6>Resultados</h6></u></a>
          <a href="{!! route('front.exams') !!}" ><u class="green-text-tn"><h6>Exames</h6></u></a>
          <a href="{!! route('front.links') !!}" ><u class="green-text-tn"><h6>Links Úteis</h6></u></a>
          <a href="{!! route('news') !!}" ><u class="green-text-tn"><h6>Notícias</h6></u></a>
          <a href="{!! route('front.duvidas') !!}" ><u class="green-text-tn"><h6>Dúvidas</h6></u></a>
          <a href="{!! route('front.planos') !!}" ><u class="green-text-tn"><h6>Planos de saúde</h6></u></a>
        </div>
        <div class="d-flex flex-column pr-4">
          <a href="{!! route('pacientes.home') !!}" ><u class="green-text-tn"><h6>Pacientes</h6></u></a>
          <a href="{!! route('pacientes.prepare') !!}"><u>Prepare-se</u> </a>
          <a href="{!! route('pacientes.gestante') !!}"><u>Gestantes</u> </a>
          <a href="{!! route('pacientes.dna') !!}"><u>DNA</u> </a>
          <a href="{!! route('pacientes.toxico') !!}"><u>Toxicológico</u> </a>
          <a href="{!! route('pacientes.sexagem') !!}"><u>Sexagem Fetal</u> </a>
          <a href="{!! route('pacientes.plaquetopenia') !!}"><u>Plaquetopenia</u> </a>
        </div>
        <div class="d-flex flex-column pr-4">
          <a href="{!! route('front.dracena') !!}" ><u class="green-text-tn"><h6>Unidades</h6></u></a>
          <a href="{!! route('front.dracena') !!}"><u>Dracena</u> </a>
          <a href="{!! route('front.tupi') !!}"><u>Tupi Paulista</u> </a>
          <a href="{!! route('front.junqueiropolis') !!}"><u>Junqueirópolis</u> </a>
          <a href="{!! route('front.panorama') !!}"><u>Panorama</u> </a>
          <a href="{!! route('front.brasilandia') !!}"><u>Brasilândia</u> </a>
        </div>
        <div class="d-flex flex-column pr-4">
          <a href="{!! route('front.contact') !!}" ><u class="green-text-tn"><h6>Contato</h6></u></a>
          <a href="mailto:laboratorio@laboratoriotrianon.com.br"> <u>laboratorio@laboratoriotrianon.com.br</u></a>
          <p class="p-0 m-0">Tel <a href="tel:+551838213249" ><u>(18) 3821-3249</u> </a> / <a href="tel:+551838223066"><u>(18) 3822-3066</u></a></p>
          <p class="p-0">WhatsApp: <a href="https://api.whatsapp.com/send?phone=5518997940595&text=Olá"><u>(18) 99794-0595</u> </a></p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="py-4">

        <div class="footer-socialmedia-tn">
          <a href="https://www.facebook.com/www.laboratoriotrianon.com.br/"><img src="{!! asset('icons\socialmedia\facebook_tn.png') !!}" alt=""> </a>
          <a href="https://www.instagram.com/laboratorio.trianon/"><img src="{!! asset('icons\socialmedia\instagram_tn.png') !!}" alt=""> </a>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="bg-black-tn py-5">
  <a href="https://hedocreativelab.com.br" class="d-flex flex-wrap justify-content-center">
    <div class="d-flex flex-column">
      <div class="d-flex justify-content-center">
        <img class="img-fluid"src="{!! asset('icons\socialmedia\LogoBRANCO_HEDO.png') !!}" alt="">
      </div>
        <span class="text-decoration-none text-light">© Trianon 2020 - Desenvolvido por Hedo Creative Lab.</span>
    </div>
  </a>
</div>
 <button class="" onclick="topFunction()" id="myBtn" title="toTop"><p class="m-0">^</p></button>

<div id="root"></div>
<script type="text/javascript">
  //activate on onclick
  $('#toggleunidade').click(function(){

$(this).toggleClass('active');

});
</script>
<script type="text/javascript">
//scrolltotop
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;

}
</script>
<script type="text/javascript">
  $('#demo').carousel();
</script>
</body>
</html>

</body>

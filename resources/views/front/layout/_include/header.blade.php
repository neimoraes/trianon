<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @isset($description)
    <title>{{$title}}</title>
  @else
    <title>Laboratório Trianon. Unidades em Dracena, Junqueirópolis, Panorama, Brasilândia, Tupi Paulista</title> 
  @endisset
  @isset($description)
    <meta name="description" content="{{$description}}">
  @else
    <meta name="description" content="Laboratório Trianon. Unidades em Dracena, Junqueirópolis, Panorama, Brasilândia, Tupi Paulista">
  @endisset

<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#00a276">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">


  <link rel="stylesheet" type="text/css" title="Mix stylesheet" href="{!! asset('css/app.css') !!}">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Source+Sans+Pro&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style media="screen">
      .icon-handatom-tn{
      mask: url('{!! asset('icons/svg/atoms-7.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/atoms-7.svg') !!}');
      }
      .icon-dna-tn{
      mask: url('{!! asset('icons/svg/dna.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/dna.svg') !!}');
      }
      .icon-flask-tn{
      mask: url('{!! asset('icons/svg/flask.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask.svg') !!}'); }

      .icon-flask2-tn{
      mask: url('{!! asset('icons/svg/flask-1.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-1.svg') !!}');
      }
      .icon-flask3-tn{
      mask: url('{!! asset('icons/svg/flask-2.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-2.svg') !!}');
      }
      .icon-flask4-tn{
      mask: url('{!! asset('icons/svg/flask-3.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-3.svg') !!}');
      }
      .icon-flask5-tn{
      mask: url('{!! asset('icons/svg/flask-4.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-4.svg') !!}');
      }
      .icon-flask6-tn{
      mask: url('{!! asset('icons/svg/flask-5.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-5.svg') !!}');
      }
      .icon-flask7-tn{
      mask: url('{!! asset('icons/svg/flask-6.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-6.svg') !!}');
      }
      .icon-flask8-tn{
      mask: url('{!! asset('icons/svg/flask-7.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/flask-7.svg') !!}');
      }
      .icon-syringe-tn{
      mask: url('{!! asset('icons/svg/syringe.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/syringe.svg') !!}');
      }
      .icon-syringe2-tn{
      mask: url('{!! asset('icons/svg/syringe-1.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/syringe-1.svg') !!}');
      }
      .icon-testtube-tn{
      mask: url('{!! asset('icons/svg/test-tube.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/test-tube.svg') !!}');
      }
      .icon-testtube2-tn{
      mask: url('{!! asset('icons/svg/test-tube-2.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/test-tube-2.svg') !!}');
      }
      .icon-testtube3-tn{
      mask: url('{!! asset('icons/svg/test-tube-3.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/test-tube-3.svg') !!}');
      }
      .icon-testtube4-tn{
      mask: url('{!! asset('icons/svg/test-tubes-1.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/test-tubes-1.svg') !!}');
      }
      .icon-drops-tn{
      mask: url('{!! asset('icons/svg/drops.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/drops.svg') !!}');
      }
      .icon-notepad-tn{
      mask: url('{!! asset('icons/svg/notepad.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/notepad.svg') !!}');
      }
      .icon-notepad2-tn{
      mask: url('{!! asset('icons/svg/notepad-1.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/notepad-1.svg') !!}');
      }
      .icon-list-tn{
      mask: url('{!! asset('icons/svg/list.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/list.svg') !!}');
      }
      .icon-placeholder-tn{
      mask: url('{!! asset('icons/svg/placeholder.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/placeholder.svg') !!}');
      }
      .icon-network-tn{
      mask: url('{!! asset('icons/svg/network.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/network.svg') !!}');
      }
      .icon-users-tn{
      mask: url('{!! asset('icons/svg/users.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/users.svg') !!}');
      }
      .icon-cells-tn{
      mask: url('{!! asset('icons/svg/cells.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/cells.svg') !!}');
      }
      .icon-cells2-tn{
      mask: url('{!! asset('icons/svg/cells-1.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/cells-1.svg') !!}');
      }
      .icon-cells7-tn{
      mask: url('{!! asset('icons/svg/cells-6.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/cells-6.svg') !!}');
      }
      .icon-cells6-tn{
      mask: url('{!! asset('icons/svg/cells-5.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/cells-5.svg') !!}');
      }
      .icon-urine-tn{
      mask: url('{!! asset('icons/svg/urine.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/urine.svg') !!}');
      }
      .icon-virus-tn{
      mask: url('{!! asset('icons/svg/virus.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/virus.svg') !!}');
      }
      .icon-sperm-tn{
      mask: url('{!! asset('icons/svg/sperm.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/sperm.svg') !!}');
      }
      .icon-feces-tn{
      mask: url('{!! asset('icons/svg/feces.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/feces.svg') !!}');
      }
      .icon-coagulation-tn{
      mask: url('{!! asset('icons/svg/coagulation.svg') !!}');
      -webkit-mask: url('{!! asset('icons/svg/coagulation.svg') !!}');
      }
      .icon-document-tn{
      mask: url('{!! asset('icons/svg/document.svg') !!}');
    -webkit-mask: url('{!! asset('icons/svg/document.svg') !!}');
      }
      .icon-question-tn{
      mask: url('{!! asset('icons/svg/question.svg') !!}');
    -webkit-mask: url('{!! asset('icons/svg/question.svg') !!}');
      }
      .icon-id-tn{
      mask: url('{!! asset('icons/svg/id-2.svg') !!}');
    -webkit-mask: url('{!! asset('icons/svg/id-card-2.svg') !!}');
      }
      .icon-whatsapp-tn{
      mask: url('{!! asset('icons/svg/whatsapp.svg') !!}');
    -webkit-mask: url('{!! asset('icons/svg/whatsapp.svg') !!}');
      }
      .icon-mortar-tn{
      mask: url('{!! asset('icons/home/mortar.svg') !!}');
    -webkit-mask: url('{!! asset('icons/home/mortar.svg') !!}');
      }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146620344-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146620344-2');
</script>

<!-- Hotjar Tracking Code for https://laboratoriotrianon.com.br -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1952332,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


</head>
<body>
  <!-- rdbOpcao -->
  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1967086680204160');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1967086680204160&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

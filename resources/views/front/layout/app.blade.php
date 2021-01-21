@include('front.layout._include.header', ['title'=>$title, 'description'=>$description])
@include('front.layout._include.nav')
@yield('content')
@include('front.layout._include.footer')

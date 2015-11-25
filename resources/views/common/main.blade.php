@include("common.header")
<!--top-->
<div class="container top">
    @yield('top')
</div>
<!--navigation-->
@include("common.navigation")
<!--navigation ended-->
<!--content-->
<div class="container content">
@yield('content')
</div>
<!--botton-->
<div class="container">
@yield('common.bottom')
</div>
@include("common.footer")

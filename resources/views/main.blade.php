<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta charset="utf8" />
    <!--@{!! Html::style('//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}-->
    <!--@{!! Html::style('//fonts.useso.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}-->
    <!--@{!! Html::style('//libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.css')!!}-->
    <!--@{!! Html::script('//libs.useso.com/js/jquery/2.1.1/jquery.js')!!}-->
    <!--{!! Html::script('//libs.cdnjs.net/jquery-validate/1.11.1/jquery.validate.min.js')!!}-->
    
    {!! Html::style('/assets/css/fonts.useso.1.css')!!}
    {!! Html::style('/assets/css/fonts.useso.2.css')!!}
    {!! Html::style('/assets/css/fonts.useso.bootstrap.css')!!}
    {!! Html::script('/assets/js/jquery.211.js')!!}
    {!! Html::script('assets/js/jquery.validate.min.js')!!}
    {!! Html::script('//libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.js')!!}
</head>
<body>
<!--top-->
<div class="container top">
    @yield('top')
</div>
@extends('navigation')
<!--navigation-->
<div class="container">
    <ul class="nav navbar-na1v nav-tabs">
        <li >
            {!! link_to('/', trans('Home')) !!}
        </li>
        <li >
            {!! link_to('article', trans('Article')) !!}
        </li>
        <li >
            {!! link_to('article/create', trans('Create')) !!}
        </li>
        <li >
            {!! link_to('about', trans('About')) !!}
        </li>
        <li class="pull-right">
            {!! link_to('user/login', 'Login In') !!}
        </li>
        <li class="pull-right">
            {!! link_to('user/register', 'Rigister') !!}
        </li>
        
    </ul>
</div>
<!--navigation ended-->
<!--content-->
<div class="container content">
@yield('content')
</div>
<!--botton-->
<div class="container">
@yield('bottom')
</div>
</body>
<script>
$(document).ready(function(){
    console.log('main');
    $(".content a").bind("click", function(){
//        return false;
    });
});
</script>
</html>

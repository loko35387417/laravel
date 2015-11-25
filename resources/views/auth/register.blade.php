<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
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
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default" style="margin-top: 200px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    @if (count($errors->all()))
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                     {!! Form::open(['url'=>'user/store', 'class'=>'form-signup', 'id' => 'form']) !!}
                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('name', 'Username:')!!}
                                {!! Form::text('name', null, array('id' => 'name', 'class'=>'form-control', 'placeholder'=>'your name')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email Address:')!!}
                                {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'example@demo.com')) !!}
                           </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Password:')!!}
                                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'your password']) !!} 
                            </div>                       
                            <div class="form-group">
                                {!! Form::label('dpassword', 'Confirm Password:')!!}
                                {!! Form::password('dpassword', ['class'=>'form-control', 'placeholder'=>'confirm your password']) !!}
                           </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                {!! Form::submit('Register Now',array('class'=>'btn btn-large btn-success btn-block')) !!}
                                {!! Form::button('Random Register Informations',array('class'=>'btn btn-large btn-success btn-block', 'id' => 'rand')) !!}
                                <a href="{{url('user/login')}}">Sign In</a>
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    var type = "POST",
        dataType = "JSON",
        remoteUrl = 'remotecheck';
        
    $.validator.addMethod("specifiedType",function(value,element,params){  
        if(/((?=[\x21-\x7e]+)[^A-Za-z0-9])/.test(value)){
            return true;
        }
        return false;
    },"Your input must include at least a characters, a number and specify char");
        
    $("#form").validate({
        onsubmit : true,
        rules : {
            username : {
                rangelength:[4,10],
                required : true
            },
            email : {
                email : true,
                required : true
            },
            password : {
                rangelength:[6,16],
                specifiedType : true,
                required : true
            },
            dpassword : {
                equalTo : "#password",
                required : true
            }
        },
        highlight: function(elem) {
            $(elem).closest(".form-group").removeClass("has-success").addClass("has-error");
        },
        success : function (elem) {
            $(elem).closest(".form-group").removeClass("has-error").addClass("has-success")
        }
    });
    
    $("#rand").bind("click", function(){
        $("#form input:visible").not("input[type='submit']").each(function(){
            switch($(arguments[1]).attr("name")) {
                case "username" : 
                    $(arguments[1]).val(randName(parseInt(Math.random()*6 + 4)));
                    break;
                case "email" :
                    var email = randName(parseInt(Math.random()*6 + 4)) + "@" + randName(3) + "." + randName(3);
                    $(arguments[1]).val(email);
                    break;
                case "password" : 
                    $(arguments[1]).val('laravel@laravel');
                    break;
                case "dpassword" :
                    $(arguments[1]).val($("#password").val());
                    break;
            }
        });
    });


var char = 'ab0cd9ef3ghi7gk6lmn5opq4rst2uv1w8xyz';
    function randName(num) {
        var str = '';
        for (var i= 0; i < num; i++) {
            str += char[parseInt(Math.random()*36)];
        }
        return str;
    }
});
</script>
</html>

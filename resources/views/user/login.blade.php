<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    {!! Html::style('//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
    {!! Html::style('//fonts.useso.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
    {!! Html::style('//libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.css')!!}
    {!! Html::script('//libs.useso.com/js/jquery/2.1.1/jquery.js')!!}
    <!--{!! Html::script('//libs.cdnjs.net/jquery-validate/1.11.1/jquery.validate.min.js')!!}-->
    {!! Html::script('assets/js/jquery.validate.min.js')!!}
    {!! Html::script('//libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.js')!!}
    {!! Html::script('//libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.js')!!}
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="margin-top: 200px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                   <?php if(!empty($this->error)) { ?> 
                    <div class="alert alert-danger">
                       <?php foreach($this->error as $error) { ?> 
                       <?php echo $error; ?><br>
                       <?php } ?> 
                    </div>
                   <?php } ?> 
                    {!!Form::open(['id' => 'form', 'url' => 'user/store'])!!}
                        <fieldset>
                            <div class="form-group">
                                {!!Form::label('email', 'Email')!!}
                                <input class="form-control" placeholder="E-mail" name="email" autofocus value='lokogo@126.com'>
                            </div>
                            <div class="form-group">
                                {!!Form::label('password', 'Password')!!}
                                <input class="form-control" placeholder="Password" name="password" type="password" value="shilin@0607">
                            </div>
                            <input type="hidden" name="process" value="login">
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block">Login</button>
                             <a href="users.php?page=forpwd">Forgot Password?</a>
                        </fieldset>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    $("#form").validate({
        rules : {
            email : {
                email: true,
                required: true
            },
            password : {
                required : true
            }
        }
    });
});
</script>
</html>
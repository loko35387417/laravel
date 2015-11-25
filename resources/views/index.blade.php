@extends('common.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Laravel 5</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p><label>App Path&nbsp;&colon;&nbsp;</label>{{app_path()}}</p>
        <p><label>Base Path&nbsp;&colon;&nbsp;</label>{{base_path()}}</p>
        <p><label>Config Path&nbsp;&colon;&nbsp;</label>{{config_path()}}</p>
        <p><label>Database Path&nbsp;&colon;&nbsp;</label>{{database_path()}}</p>
        <p><label>Public Path&nbsp;&colon;&nbsp;</label>{{public_path()}}</p>
        <p><label>Storage Path&nbsp;&colon;&nbsp;</label>{{storage_path()}}</p>
        <p><label>Site Name : </label></p>
    </div>
    <div class="col-lg-12" id = "attr">
        <style>
            #attr p{
                margin:0;
                border-left: 1px dotted #000;
                font-size:24px;
            }
            #attr:first-child{
                border :1px solid red;
            }
        </style>
        <p>laravel(根)</p>
        <p>--------app</p>
        <p>----------------Https</p>
        <p>------------------------routes.php(路由定义文件!!!important)</p>
        <p>------------------------Controllers</p>
        <p>--------------------------------Controllers(控制器)</p>
        <p>--------Model(模型)</p>
        <p>--------resources(视图)</p>
        <p>--------storage</p>
        <p>----------------framework</p>
        <p>------------------------views</p>
        <p>--------config</p>
        <p>--------public</p>
    </div>
</div>
@endsection

@section('top')

@endsection

@section('bottom')
<script>
console.log('section bottom');
</script>
@endsection
<script>
$(document).ready(function(){
    $(".refresh").bind("click", function(){
        
    });
});
</script>
@endsection

@extends('main')

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
</div>
@endsection

@section('top')

@endsection

@section('bottom')

<script>
$(document).ready(function(){
    $(".refresh").bind("click", function(){
        alert(123);
    });
});
</script>
@endsection

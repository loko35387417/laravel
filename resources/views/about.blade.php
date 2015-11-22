@extends('main')
@section("")
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Laravel 5</h1>
        <p><?php echo function_exists('classActivePath'); ?></p>
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
        <p>{{$name}}</p>
    </div>
</div>
@endsection

@section('top')

@endsection

@section('bottom')

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">Laravel 5</div>       
    </div>
    <div class="col-lg-12">
        {!! Form::open() !!}
        <div class="form-control">
            {!! Form::select('size', array('L' => 'Large', 'S' => 'Small'))!!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <p class="">Laravel 5</p>
    </div>
</div>
<script>
$(document).ready(function(){
    
});
</script>
@endsection

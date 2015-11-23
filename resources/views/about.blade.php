@extends('main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Laravel 5</h1>
        <p><?php echo function_exists('classActivePath') ? 'yes' : 'no'; ?></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>{{$name}}</h1>
    </div>
</div>
@endsection

@section('top')
<hr/>
@endsection

@section('bottom')
<hr/>
<script>
$(document).ready(function(){
    
});
</script>
@endsection

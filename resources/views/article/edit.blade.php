@extends('main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit</h1>
        {!! Form::open(['id' => 'form','method' => 'post', 'url' => url('article/update', $article->id)]) !!}
        {!!Form::hidden('id', $article->id)!!}
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" class="form-control" value="{{$article->title}}" />
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input id="content" type="text" name="content" class="form-control" value="{{$article->content}}" />
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" value="{{$article->content}}" />
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

@section('top')

@endsection

@section('bottom')
<script>
$(document).ready(function(){
    $("#form").validate({
       rules : {
           title : {
               required : true
           },
           content : {
               required : true
           }
       }
    });   
});
</script>
@endsection
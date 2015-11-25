@extends('common.main')

@section('content')
<div class="row">
    <div class="col-lg-12">{{$article}}
        <h1 class="page-header">Edit</h1>
        {!! Form::model($article,['id' => 'form','method' => 'post', 'url' => url('article/update', $article->id)]) !!}
        {!!Form::hidden('id', $article->id)!!}
        <div class="form-group">
            <label for="title">Title</label>
            {!!Form::text("title", "", ["id" => "title", "class" => "form-control", "name" => "title"])!!}
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input id="content" type="text" name="content" class="form-control" value="" />
        </div>
        <div class="form-group">
            {!!Form::submit("Submit", ["class" => "form-control btn btn-success"])!!}
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
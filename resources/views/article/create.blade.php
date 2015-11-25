@extends('common.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create</h1>
        {!! Form::open(['id' => 'form', 'url' => 'article/store']) !!}
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" class="form-control" value="" />
        </div>
        <div class="form-group">
            {!!Form::label('content', 'Content')!!}
            {!!Form::textarea('content', '', ['class' => 'form-control', 'id' => 'content'])!!}
        </div>
        <div class="form-group">
            {!!Form::submit('Save Article', ['class' => 'form-control btn btn-success'])!!}
            <!--<input type="submit" class="form-control btn btn-success" value="Save" />-->
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
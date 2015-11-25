@extends('common.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$article->title}}</h1>
        <hr/>
        <article>{{$article->content}}</article>
        <hr/>
        <div class="active">
            <a class="btn btn-sm btn-danger" href="{{URL::to('article/destory', $article->id)}}">Delete</a>
            <a class="btn btn-sm btn-success" href="{{URL::to('article/edit', $article->id)}}">Edit</a>
            <a class="btn btn-sm btn-info" href="{{URL::route('lists')}}">Back</a>
            <a class="btn btn-sm btn-success" href="{{URL::to('article/create')}}">Create New</a>
            <a class="btn btn-sm btn-success" href="{{URL::to('article', $prev)}}">Prev</a>
            <a class="btn btn-sm btn-success" href="{{URL::to('article', $next)}}">Next</a>
        </div>
    </div>
</div>
@endsection

@section('top')

@endsection

@section('bottom')

@endsection
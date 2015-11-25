@extends('common.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Article&nbsp;List:</b>
                 <a class="btn btn-sm btn-success" href="{{URL::to('article/create')}}">Create New</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive" id="table-panel">         
                    <table class="table table-striped table-bordered table-hover" id="configuration-list">                            
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Publish Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($list as $article)
                                <tr>
                                    <td><a href="{{url('article', $article->id)}}">{{$article->id}}</a></td>
                                    <td>{{empty($article->title) ? 'No title' : $article->title}}</td>
                                    <td>{{empty($article->content) ? 'empty content' : $article->content}}</td>
                                    <td>{{$article->published_at}}</td>
                                    <td><a href="{{url('article/edit', $article->id)}}">Edit</a></td>
                                    <td><a href="{{url('article/destory', $article->id)}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection

@section('bottom')

@endsection
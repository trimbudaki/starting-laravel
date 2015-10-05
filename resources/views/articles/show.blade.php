@extends('app')

@section('content')

    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $article->title }}
            </div>
            <div class="panel-body">
                <p>{{ $article->desc }}</p>
                <p class="pull-right">{{ $article->published_at }}</p>
            </div>
            <div class="panel-footer">
                <a href="{{url("articles/$article->id/edit") }}" class="btn btn-default">Edit</a>
                <a href="{{url("articles/$article->id/edit") }}" class="btn btn-default">remove</a>
            </div>
        </div>
        <hr>

    </div>

@stop
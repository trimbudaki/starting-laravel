@extends('app')

@section('content')
    <h3 class="text-center">Articles</h3>
    <hr>

        <div class="col-md-5">
        <div class="list-group">
            @foreach($articles as $article)
            {{--<a href="/articles/{{ $article->id }}" class="list-group-item active">--}}{{--first methotd--}}
            <a href="{{url('/articles',$article->id) }}" class="list-group-item active">
                <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                <p class="list-group-item-text">{{ $article->desc }}</p>
                <p class="list-group-item-text">{{ $article->published_at }}</p>
            </a>

            @endforeach
        </div>
        </div>

    @stop
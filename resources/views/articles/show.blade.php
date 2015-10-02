@extends('app')

@section('content')
    <h3 class="text-center">{{ $article->title }}</h3>
    <hr>

    <div class="col-md-5">
        <div class="list-group">

                <a href="#" class="list-group-item active">
                    <p class="list-group-item-text">{{ $article->desc }}</p>
                    <p class="list-group-item-text">{{ $article->published_at }}</p>
                </a>


        </div>
    </div>

@stop
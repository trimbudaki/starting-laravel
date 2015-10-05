@extends('app')
@section('content')


    <h3 class="text-center">Edit: {!! $article->title !!}</h3>
    <hr>

    <div class="col-md-5">
        {!! Form::model($article,['method'=> 'PATCH', 'action' => ['ArticleController@update',$article->id]]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('desc','Descriptions') !!}
            {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('published_at','Published On') !!}
            {!! Form::input('date','published_at', date('Y-m-d'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Article',['class'=>'btn btn-primary pull-right']) !!}
        </div>

        {!! Form::close() !!}

        @if($errors->any())

            <ul class="alert alert-danger unstyled">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif

    </div>
@stop
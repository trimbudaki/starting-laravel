@extends('app')
@section('content')


    <h3 class="text-center">Create a new Article</h3>
    <hr>

    <div class="col-md-5">
        {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('desc','Descriptions') !!}
            {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Article',['class'=>'btn btn-primary pull-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop
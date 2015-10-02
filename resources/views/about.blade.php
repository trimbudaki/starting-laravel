@extends('app')

@section('content')
    <h1>About </h1>

    @if(count($people))
    <h3>People that i work with</h3>

    <ul class="unstyled">
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut autem consequatur, cumque dolores doloribus
        ducimus enim est ex facilis itaque laboriosam necessitatibus, odio placeat quasi quo sunt veritatis! A! </p>

@stop
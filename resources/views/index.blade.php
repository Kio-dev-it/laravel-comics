@extends('layout.base')

@section('pageContent')
    <h1>Hello LaraComics!</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic["title"]}}</li>
        @endforeach
    </ul>
@endsection
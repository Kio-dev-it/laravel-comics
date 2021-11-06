@extends('layout.base')

@section('pageContent')
    <div class="hero">
        <img class="hero__image" src="{{asset("images/jumbotron.jpg")}}" alt="">
    </div>

    <div class="container">

        <div class="section-tag">
            <h2>current series</h2>
        </div>

        <div class="card-wrapper">

            @foreach ($comics as $comic)
                <div class="card">
                    <div class="card__image">
                        <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}} Cover">
                    </div>
                    <div class="card__title">
                        <p>{{$comic["series"]}}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <button class="btn-load">Load More</button>

    </div>
@endsection
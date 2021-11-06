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

    <div class="mega-link">
        <div class="container">
            <a href="#" class="mega-link__card">
                <div class="mega-link__image">
                    <img class="mega-link__image" src="{{asset("images/buy-comics-digital-comics.png")}}" alt="">
                </div>
                <div class="mega-link__title">
                    <p>Digital Comics</p>
                </div>
            </a>
            <a href="#" class="mega-link__card">
                <div class="mega-link__image">
                    <img class="mega-link__image" src="{{asset("images/buy-comics-merchandise.png")}}" alt="">
                </div>
                <div class="mega-link__title">
                    <p>Dc merchandise</p>
                </div>
            </a>
            <a href="#" class="mega-link__card">
                <div class="mega-link__image">
                    <img class="mega-link__image" src="{{asset("images/buy-comics-subscriptions.png")}}" alt="">
                </div>
                <div class="mega-link__title">
                    <p>subscription</p>
                </div>
            </a>
            <a href="#" class="mega-link__card">
                <div class="mega-link__image">
                    <img class="mega-link__image" src="{{asset("images/buy-comics-shop-locator.png")}}" alt="">
                </div>
                <div class="mega-link__title">
                    <p>Comic Shop Locator</p>
                </div>
            </a>
            <a href="#" class="mega-link__card">
                <div class="mega-link__image">
                    <img class="mega-link__image" src="{{asset("images/buy-dc-power-visa.svg")}}" alt="">
                </div>
                <div class="mega-link__title">
                    <p>Dc power visa</p>
                </div>
            </a>
        </div>
    </div>
@endsection
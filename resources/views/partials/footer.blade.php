<footer>
    <div class="footer-top">
        <div class="container">

            <div class="footer-lists">
                <div class="list-card" id="dc-comics">
                    <div class="list-card__name">
                        DC COMICS
                    </div>

                    <ul class="list-card__list">
                        @foreach ($topData["DcComics"] as $DcComic)
                            <li>{{$DcComic}}</li> 
                        @endforeach
                    </ul>
                </div>

                <div class="list-card" id="shop">
                    <div class="list-card__name">
                        SHOP
                    </div>

                    <ul class="list-card__list">
                        @foreach ($topData["Shop"] as $Shop)
                            <li>{{$Shop}}</li> 
                        @endforeach
                    </ul>
                </div>

                <div class="list-card" id="dc">
                    <div class="list-card__name">
                        DC
                    </div>

                    <ul class="list-card__list">
                        @foreach ($topData["DC"] as $DC)
                            <li>{{$DC}}</li> 
                        @endforeach
                    </ul>
                </div>

                <div class="list-card" id="sites">
                    <div class="list-card__name">
                        SITES
                    </div>

                    <ul class="list-card__list">
                        @foreach ($topData["Sites"] as $sites)
                            <li>{{$sites}}</li> 
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="footer-logo">
                <img src="{{asset("images/dc-logo-bg.png")}}" alt="">
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__left">
                <a href="#" class="sign-up">SIGN UP NOW!</a>
            </div>

            <div class="footer-bottom__right">
                <a href="#" class="follow">FOLLOW US</a>
                @foreach ($bottomData as $social)
                <a href="{{$social["src"]}}"><img src="{{$social["img"]}}" alt="{{$social["name"]}}"></a>
                @endforeach
            </div>

        </div>
    </div>
</footer>
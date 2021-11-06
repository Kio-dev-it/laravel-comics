<header class="header">
    <div class="header__top">
        <div class="container">
            <span>DC POWER &#8480;VISA&#174;</span>
            <span>ADDITONAL DC SITES</span>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <img src="{{asset("images/dc-logo.png")}}" alt="Logo DC Comics">
            <ul class="navigation">

                @foreach ($navmenu as $linkmenu)
                    <li><a href="{{$linkmenu["url"]}}" class="{{$linkmenu["state"]}}">{{$linkmenu["name"]}}</a></li>
                @endforeach

            </ul>
            <div class="search">
                <input type="text" name="search" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
</header>
<header class="text-uppercase">
    <div class="header-top">
        <div class="container">
            <a href="#">dc power visa <i class="fa fa-registered"></i></a>
            <a href="#">additional dc sites <i class="fa fa-caret-down"></i></a>
        </div>
    </div>
    <div class="header-bottom d-flex container">
        <div class="img-container">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <ul class="d-flex font-bold">
            <li><a href="{{route('characters')}}" class="{{(Route::currentRouteName() == 'characters') ? 'active': ''}}">characters</a></li>
            <li><a href="{{route('comics')}}" class="{{(Route::currentRouteName() == 'comics') ? 'active' : ''}}">comics</a></li>
            <li><a href="{{route('movies')}}" class="{{(Route::currentRouteName() == 'movies') ? 'active' : ''}}">movies</a></li>
            <li><a href="{{route('tv')}}" class="{{(Route::currentRouteName() == 'tv') ? 'active' : ''}}">tv</a></li>
            <li><a href="{{route('games')}}" class="{{(Route::currentRouteName() == 'games') ? 'active' : ''}}">games</a></li>
            <li><a href="{{route('collectibles')}}" class="{{(Route::currentRouteName() == 'collectibles') ? 'active' : ''}}">collectibles</a></li>
            <li><a href="{{route('video')}}" class="{{(Route::currentRouteName() == 'video') ? 'active' : ''}}">video</a></li>
            <li><a href="{{route('fans')}}" class="{{(Route::currentRouteName() == 'fans') ? 'active' : ''}}">fans</a></li>
            <li><a href="{{route('news')}}" class="{{(Route::currentRouteName() == 'news') ? 'active' : ''}}">news</a></li>
            <li><a href="{{route('shop')}}" class="{{(Route::currentRouteName() == 'shop') ? 'active' : ''}}">shop <i class="fa fa-caret-down token"></i></a></li>
        </ul>
        <form action="">
            <input type="text" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>
<header>
    <nav class="nav flex-column pb-2">
        <a class="nav-brand py-4" href="{{route('home')}}">
            <img height="45" src="https://www.svgrepo.com/show/129177/vinyl.svg" alt="">
            <!--<span class="logo">SingersPedia</span> -->
        </a>
        <div class="d-flex flex-column justify-content-between nav_menu">
            <div class="up">
                <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
                <a class="nav-link {{Route::currentRouteName() === 'singers' ? 'active' : ''}}" href="{{route('singers')}}">Singers</a>
                <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">Shop</a>
            </div>
            <div class="down">
                <a class="nav-link {{Route::currentRouteName() === 'singers.index' ? 'active' : ''}}" href="{{route('singers.index')}}" aria-current="page">Admin</a>
            </div>
        </div>
    </nav>
</header>
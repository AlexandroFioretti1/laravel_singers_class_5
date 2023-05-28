<header>
    <div class="container">
        <nav class="nav justify-content-between align-items-center">
            <a class="nav-brand " href="{{route('home')}}">
                <!-- <img height="45" src="https://www.svgrepo.com/show/129177/vinyl.svg" alt=""> -->
                <span class="logo">SingersPedia</span>
            </a>
            <div class="d-flex ">
                <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
                <a class="nav-link {{Route::currentRouteName() === 'singers' ? 'active' : ''}}" href="{{route('singers')}}">Singers</a>
                <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">Shop</a>
            </div>
        </nav>
    </div>
</header>
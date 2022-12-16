<header id="site_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">Characters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">Collectibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">Fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavDropdown">
                <a href="{{ route('homepage') }}" class="navbar-brand">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active-navlink' : '' }}"
                            href="{{ route('characters') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active-navlink' : '' }}"
                            href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active-navlink' : '' }}"
                            href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

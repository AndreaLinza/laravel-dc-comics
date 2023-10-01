@php
    
    $navList = [
        [
            'name' => 'Characters',
            'link' => 'Characters',
        ],
        [
            'name' => 'Comics',
            'link' => 'Comics',
        ],
        [
            'name' => 'Movies',
            'link' => 'Movies',
        ],
        [
            'name' => 'Tv',
            'link' => 'Tv',
        ],
        [
            'name' => 'Games',
            'link' => 'Games',
        ],
        [
            'name' => 'Collectibles',
            'link' => 'Collectibles',
        ],
        [
            'name' => 'Video',
            'link' => 'Video',
        ],
        [
            'name' => 'Fans',
            'link' => 'Fans',
        ],
        [
            'name' => 'News',
            'link' => 'News',
        ],
    ];

    
@endphp


<nav class="navbar bg-transparent navbar-expand-lg">
    <a class="navbar-brand" href="/"><img src="/images/dc-logo.png" alt="DC"></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach ($navList as $navItem)
                <li class="nav-item">
                    <a class="nav-link text-uppercase" aria-current="page"
                        href="{{route('comics.show', $navItem['link'])}}">{{ $navItem['name'] }}</a>
                    {{-- class="{{ Request::route()->getName() === 'homepage' ? 'active' : ''  --}}
                </li>
            @endforeach

            <li class="nav-item dropdown me-5">
                <a class="nav-link dropdown-toggle text-uppercase" href="/Shop" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    shop
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <form class="d-flex input-group w-50" role="search">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>

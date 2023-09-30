@php
    $bannerLists = [
        [
            'id' => 'DigitalComics',
            'img' => '/images/buy-comics-digital-comics.png',
            'title' => 'digital comics',
        ],
        [
            'id' => 'DcMerchandise',
            'img' => '/images/buy-comics-merchandise.png',
            'title' => 'dc merchandise',
        ],
        [
            'id' => 'Subscription',
            'img' => '/images/buy-comics-subscriptions.png',
            'title' => 'subscription',
        ],
        [
            'id' => 'ComicShopLocator',
            'img' => '/images/buy-comics-shop-locator.png',
            'title' => 'comic shop locator',
        ],
        [
            'id' => 'DcPowerVisa',
            'img' => '/images/buy-dc-power-visa.svg',
            'title' => 'dc power visa',
        ],
    ];
@endphp

<section class="blue-banner">
    <div class="container justify-content-start">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5 ">
            @foreach ($bannerLists as $banner)
                <div class="col py-2">
                    <a class="d-flex align-items-center text-decoration-none" href="/{{ $banner['id'] }}">
                        <img class="ms-sm-5" src="{{ $banner['img'] }}" alt="">
                        <span>{{ $banner['title'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>



    </div>
</section>

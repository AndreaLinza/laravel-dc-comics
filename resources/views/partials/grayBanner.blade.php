@php
    $linkBanner = [
        [
            'id' => 'DigitalComics',
            'img' => '/images/cta-icons.png',
            'title' => 'digital comics',
        ],
        [
            'id' => 'DcMerchandise',
            'img' => '/images/cta-icons.png',
            'title' => 'shop dc',
        ],
        [
            'id' => 'ComicShopLocator',
            'img' => '/images/cta-icons.png',
            'title' => 'comic shop locator',
        ],
        [
            'id' => 'Subscription',
            'img' => '/images/cta-icons.png',
            'title' => 'subscription',
        ],
    ];
@endphp
<section class="banner-link">
    <div class="container">
        <div class="row row-cols-4">
            <div class="col">
                <div>
                    <a class="d-flex fw-bold align-items-center text-decoration-none" href="/">
                        <span class="text-uppercase me-3">digital comics</span>
                        <div class="link-img">
                            <img class="dc-img" src="/images/cta-icons.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <a class="d-flex fw-bold align-items-center text-decoration-none" href="/">
                    <span class="text-uppercase me-3">shop dc</span>
                    <div class="link-img">
                        <img class="dc-shop-img" src="/images/cta-icons.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="d-flex fw-bold align-items-center text-decoration-none" href="/">
                    <span class="text-uppercase me-3">comic shop locator</span>
                    <div class="link-img">
                        <img class="locator-img" src="/images/cta-icons.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="d-flex fw-bold align-items-center text-decoration-none" href="/">
                    <span class="text-uppercase me-3">subscription</span>
                    <div class="link-img">
                        <img class="subscrition-img" src="/images/cta-icons.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

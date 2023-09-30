@php
    
    $footerList = [
        [
            'title' => 'DC COMICS',
            'credits' => ['Character', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
        ],
        [
            'title' => 'SHOP',
            'credits' => ['Shop DC', 'Shop DC Collectibles'],
        ],
        [
            'title' => 'DC',
            'credits' => ['Terms of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptioons', 'Talent WorkShops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact US'],
        ],
        [
            'title' => 'SITES',
            'credits' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
        ],
    ];
    $footerAppLinks = ['/images/footer-facebook.png', '/images/footer-twitter.png', '/images/footer-youtube.png', '/images/footer-pinterest.png', '/images/footer-periscope.png'];
    
@endphp

<footer class="position-relative">
    <div class="container">
        <img class="dc-logo" src="/images/dc-logo-bg.png" alt="">
        <div class="d-flex flex-column flex-wrap w-25 pt-4">
            @foreach ($footerList as $singleEl)
                <div class="py-2 pe-5">
                    <h3 class="title">{{ $singleEl['title'] }}</h3>
                    <ul class="me-auto mb-2 mb-lg-0 list-unstyled text-white pb-3">

                        @foreach ($singleEl['credits'] as $credit)
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ $credit }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            @endforeach
        </div>
    </div>
    <div class="sign-banner">
        <div class="container align-items-center d-flex justify-content-between">
            <div>
                <button type="button" class="btn btn-outline-primary border-3 text-light fw-bold">SIGN-UP NOW!</button>
            </div>
            <div class="d-md-flex align-items-center">
                <span class="pe-md-4 d-flex justify-content-center">FOLLOW US</span>
                <div class="row row-cols-3 row-cols-md-5 justify-content-center">
                    @foreach ($footerAppLinks as $appLink)
                        <div class="col py-1 d-flex justify-content-center">
                            <a href="#"><img src="{{ $appLink }}" alt=""></a>
                        </div>
                    @endforeach
                    {{-- <a href="#"><img src="/images/footer-twitter.png" alt=""></a>
                    <a href="#"><img src="/images/footer-youtube.png" alt=""></a>
                    <a href="#"><img src="/images/footer-pinterest.png" alt=""></a>
                    <a href="#"><img src="/images/footer-periscope.png" alt=""></a> --}}
                </div>
            </div>



        </div>
    </div>

</footer>

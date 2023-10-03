@php
    $el = ['[', ']', '"'];
@endphp
<section class="info-section border-col">
    <div class="container">

        <div class="row">
            <div class="col-6 pe-5">
                <h2 class="fw-bold mb-5">Talent</h2>

                <div class="row border-col py-3">
                    <div class="col-3">
                        <h5>Art by:</h5>
                    </div>
                    <div class="col">
                        <p class="my-color">{{(str_replace($el, '', $comics['artists']) )}}</p>
                    </div>
                </div>
                <div class="row border-col py-3">
                    <div class="col-3">
                        <h5>Written by:</h5>
                    </div>
                    <div class="col">
                        <p class="my-color">{{(str_replace($el, '', $comics['writers']))}}</p>
                    </div>
                </div>

            </div>
            <div class="col-6 ps-5">
                <h2 class="fw-bold mb-5">Specs</h2>
                <div class="row border-col py-3">
                    <div class="col-3">
                        <h5>Series:</h5>
                    </div>
                    <div class="col">
                        <p class="text-uppercase fw-bold my-color">{{ $comics['series'] }}</p>
                    </div>
                </div>
                <div class="row border-col py-3">
                    <div class="col-3">
                        <h5>U.S.Price:</h5>
                    </div>
                    <div class="col">
                        <p>$ {{ $comics['price'] }}</p>
                    </div>
                </div>
                <div class="row border-col py-3">
                    <div class="col-3">
                        <h5>On Sale Date:</h5>
                    </div>
                    <div class="col">
                        <p>{{ $comics['sale_date'] }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

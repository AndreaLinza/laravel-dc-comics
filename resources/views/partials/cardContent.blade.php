<section class="card-section">
    <div class="container">
        <div class="row">
            {{-- Col di Sinistra --}}
            <div class="col-8">
                <h1 class="pb-2 d-inline-block">{{ $comics['title'] }}</h1>
                <div class="row green-banner">
                    <div class="col-9 border-banner ">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold px-4 my-4" style="color: #B8FD9C">U.S. Price: <span
                                        class="text-white">${{ $comics['price'] }}</span></p>
                                <p class="fw-bold text-uppercase my-4 px-4" style="color: #B8FD9C">Available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 border-banner">
                        <div class="green-banner  mx-auto my-3">
                            <div class="dropdown">
                                <button class="btn btn-outline-success dropdown-toggle fw-bold" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Check Availability
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-4">{{ $comics['description'] }}</p>
            </div>

            {{-- Col di Destra --}}
            <div class="col-4">
                <div class="d-flex flex-column ms-auto align-items-end">
                    <h5 class="text-uppercase d-inline-block">Advertisement</h5>
                    <img src="/images/adv.jpg" alt="">
                </div>
            </div>

        </div>
        <a href="{{route('comics.edit', $comics->id)}}" class="btn btn-warning">Modifica</a>
    </div>
</section>

<section>
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <a href="{{ route('comics.show', $comic->id) }}"
                            class="text-center text-white text-decoration-none">
                            <div class="img-container">
                                <img src="{{ $comic['thumb'] }}" alt="pic">
                                <div class="hover">
                                    <h5 class="pt-3 px-2"> {{ $comic['series'] }} </h5>
                                    <p class="position-absolute start-50 bottom-0 translate-middle pb-3">€
                                        {{ $comic['price'] }} </p>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="card-text"> {{ $comic['title'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="{{route('comics.create')}}" class="btn btn-primary ms-auto rounded-0 text-uppercase">Add More</a>
    </div>
</section>

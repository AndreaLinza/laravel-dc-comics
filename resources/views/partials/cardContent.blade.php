<section>
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <div class="img-container">
                            <img src="{{ $comic['thumb'] }}" alt="pic">
                            <a href="/{{$comic['id']}}" class="hover text-center text-white text-decoration-none">
                                <h5 class="pt-3 px-2"> {{$comic['series']}} </h5>
                                <p class="position-absolute start-50 bottom-0 translate-middle pb-3"> {{$comic['price']}} </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{ $comic['title'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="btn btn-primary rounded-0 text-uppercase" type="button">Load More</button>
    </div>
</section>

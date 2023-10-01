<section class="card-section">
    <div class="container">
        <div class="row">
            <h1>{{$comics['title']}}</h1>
            {{-- Col di Sinistra --}}
            <div class="col-8 green-banner">
                <div class="row">
                    <div class="col-8">
                        <p class="fw-bold p-2" style="color: #B8FD9C">U.S. Price: <span class="text-white">${{$comics['price']}}</span></p>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
            {{-- Col di Destra --}}
            <div class="col-4 green-banner"></div>
        </div>
    </div>
</section>
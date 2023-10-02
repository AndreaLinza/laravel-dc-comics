<div class="container py-5">
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf()
        <div class="col-md-4">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="col-md-4">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="col-md-4">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="col-md-12">
            <label class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <div class="col-12">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" placeholder="Link immagine">
        </div>
        <div class="col-4">
            <label class="form-label">Prezzo</label>
            <input type="number" class="form-control" name="price">
        </div>

        <div class="col-md-4">
            <label class="form-label">Data di Vendita</label>
            <input type="date" class="form-control" name="sale_date">
        </div>

        <div class="col-12">
            <label class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists">
        </div>
        <div class="col-12">
            <label class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers">
        </div>
        <div class="col-12">
            <button class="btn btn-primary">Aggiungi</button>
            <a href="{{route('comics.index')}}" class="btn btn-outline-secondary">Indietro</a>
        </div>
    </form>
</div>

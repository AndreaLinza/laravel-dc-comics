@php
    $el = ['[', ']', '"'];
@endphp

<div class="container py-5">
    <form action="{{ route('comics.update', $comics->id) }}" method="POST" class="row g-3">
        @csrf()
        @method('put')
        <div class="col-md-4">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title', $comics->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                value="{{ old('series', $comics->series) }}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                value="{{ old('type', $comics->type) }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12 mb-5">
            <label class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror"style="min-height: 100%"
                name="description">{{ old('description', $comics->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                placeholder="Link immagine" value="{{ old('thumb', $comics->thumb) }}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-4">
            <label class="form-label">Prezzo</label>
            <input type="number" min="1" step="0.01"
                class="form-control @error('price') is-invalid @enderror" name="price"
                value="{{ old('price', $comics->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Data di Vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                value="{{ old('sale_date', $comics->sale_date) }}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                value="{{ $comics->artists ? old('artists', str_replace($el, '', $comics['artists'])) : '' }}">
            @error('artists')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                value="{{ $comics->writers ? old('writers', str_replace($el, '', $comics['writers'])) : '' }}">
            @error('writers')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            
            <button class="btn btn-primary">Salva</button>
            <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary">Indietro</a>
        </div>
    </form>
    <form action="{{ route('comics.destroy', $comics['id']) }}" method="POST">
        @csrf

        @method('DELETE')

        <button class="btn btn-danger">Elimina</button>
    </form>
</div>

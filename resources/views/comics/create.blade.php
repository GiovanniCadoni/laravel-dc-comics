@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <p class="text-center fw-bold fs-4">
            Aggiungi un nuovo fumetto:
        </p>
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select class="form-select" name="type" id="type">
                            <option @selected(old('type') === '') value="">Seleziona un tipo</option>
                            <option @selected(old('type') === 'comic book') value="comic book">Comic Book</option>
                            <option @selected(old('type') === 'graphic novel') value="graphic novel">Graphic Novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection
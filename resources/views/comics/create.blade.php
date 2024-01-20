@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <p class="text-center fw-bold fs-4">
            Aggiungi un nuovo fumetto:
        </p>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select class="form-select" name="type" id="type">
                            <option selected value="">Seleziona un tipo</option>
                            <option value="comic book">Comic Book</option>
                            <option value="graphic novel">Graphic Novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection
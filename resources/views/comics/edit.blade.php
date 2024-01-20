@extends('layouts.app')

@section('content')
<div class="container py-4">
    <p class="text-center fw-bold fs-4">
        Modifica il fumetto:
    </p>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title}}">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione</label>
                  <textarea class="form-control" id="description" rows="3" name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select class="form-select" name="type" id="type">
                        <option {{ $comic->type === 'comic book' ? 'selected' : ''}} value="comic book">Comic Book</option>
                        <option {{ $comic->type === 'graphic novel' ? 'selected' : ''}} value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Modifica</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <section class="bg-dark py-5">
        <div class="container p-4 bg-white rounded-2">
            <p class="text-center fw-bold fs-4">Lista dei Comics presenti:</p>
            <div class="row justify-content-center">
                <div class="col-10">
                    <a class="py-4" href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto +</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Serie</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <th scope="row">{{ $comic->id }}</th>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->series }}</td>
                                    <td>{{ $comic->price }}</td>
                                    <td>
                                        <a class="btn btn-secondary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Info</a>
                                        <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                                        <form class="d-inline-block" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">Cancella</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

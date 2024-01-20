@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card border border-0">
                    <img src="{{ $comic->thumb }}" class="card-img-top w-50 mx-auto" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">{{ $comic->title }}</h5>
                        <p class="card-text">
                            <i class="fw-bold">Description:</i> {{ $comic->description }}
                        </p>
                        <p class="card-text">
                            <i class="fw-bold">Series:</i> {{ $comic->series }} ({{ $comic->type }})
                        </p>
                        <p class="card-text">
                            <i class="fw-bold">Price:</i> <i class="text-success"> {{ $comic->price }} </i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

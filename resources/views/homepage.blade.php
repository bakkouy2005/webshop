<head>
    
    <style>
        .hero {
    background-image: url('/img/laliga_hero.png');
    background-size: cover;
    background-position: center;
    height: 600px; /* Pas de hoogte aan zoals nodig */
    position: relative;
    color: white; /* Zorg ervoor dat de tekst goed zichtbaar is */
    filter: brightness(10px);
}
    </style>
</head>

@extends('layouts.base')

@section('content')
    <div class="hero">
        <h1>Welkom bij FC LALIGA hier vind je de beste en goedkoopste kit van alle soorte laliga teams  </h1>
    </div>

    <div class="container content">
        <h2 class="text-center mb-4">Random Producten</h2>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->img_file) }}" class="card-img-top" alt="{{ $product->titel }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->titel }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-price">€{{ number_format($product->price / 100, 2, ',', '.') }}</p>
                            <a href="#" class="btn btn-primary">In winkelwagen</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

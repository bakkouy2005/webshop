@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Producten</h2>

        @foreach($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->titel }}</h5>
                    <p class="card-text"><strong>Beschrijving:</strong> {{ $product->description }}</p>
                    <p class="card-text"><strong>Prijs:</strong> €{{ number_format($product->price, 2) }}</p>
                    <p class="card-text"><strong>Afbeelding Bestand:</strong> {{ $product->img_file }}</p>
                    <p class="card-text"><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                    <p class="card-text"><strong>Patch:</strong> {{ ucfirst($product->choose_patch) }}</p>
                    <p class="card-text"><strong>Maat:</strong> {{ $product->size }}</p>
                    <p class="card-text"><strong>Aantal:</strong> {{ $product->quantity }}</p>
                    
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Aanpassen</a>
                </div>
            </div>
        @endforeach
        
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Nieuw Product Toevoegen</a>
        <a href="/kit" class="btn btn-secondary">Naar Kit</a>
    </div>
@endsection

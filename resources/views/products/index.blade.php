@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Producten</h2>

        @foreach($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->titel }}</h5>
                    <p class="card-text"><strong>Beschrijving:</strong> {{ $product->description }}</p>
                    <p class="card-text"><strong>Prijs:</strong> €{{ ($product->price) }}</p>
                    
                    <p class="card-text"><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                    <p class="card-text"><strong>Size:</strong> {{ ucfirst($product->size) }}</p>
                    <p class="card-text"><strong>Aantal:</strong> {{ $product->quantity }}</p>
                    
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Aanpassen</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder de product</button>
                    </form>
                </div>
            </div>
        @endforeach
        
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Nieuw Product Toevoegen</a>
        <a href="/" class="btn btn-secondary mb-3">Terug ></a>
    </div>
@endsection

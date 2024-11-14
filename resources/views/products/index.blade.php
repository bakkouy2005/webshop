@extends('layouts.base')

@section('content')
    <div class="container">
        

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            @if($product->img_file)
                                <div class="mt-2">
                                    
                                    <img src="{{ asset($product->img_file) }}" alt="Afbeelding" class="img-thumbnail" style="max-width: 100%; height: 150px; object-fit: cover;">
                                </div>
                            @endif

                            <h5 class="card-title mt-2">{{ $product->titel }}</h5>
                            
                            <p class="card-text"><strong>Prijs:</strong> €{{ $product->price }}</p>
                            <p class="card-text"><strong>Deals price:</strong> {{ $product->deals }}</p>
                            <p class="card-text"><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                            <p class="card-text"><strong>Aantal:</strong> {{ $product->quantity }}</p>
                            
                            
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Aanpassen</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijder de product</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Nieuw Product Toevoegen</a>
        <a href="/" class="btn btn-secondary mb-3">Terug ></a>
    </div>
@endsection

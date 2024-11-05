@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Product Details</h2>
        <div>
            <strong>Titel:</strong> {{ $product->titel }}
        </div>
        <div>
            <strong>Beschrijving:</strong> {{ $product->description }}
        </div>
        <div>
            <strong>Prijs:</strong> €{{ number_format($product->price, 2) }}
        </div>
        
    </div>
@endsection

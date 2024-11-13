@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Product Details</h2>
        <div>
            <strong>Afbeelding: </strong> <img src="{{ asset('storage/images/' . $product->img_file) }}" alt="Afbeelding" class="img-thumbnail" style="max-width: 150px;">


        </div>
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image -->
                <img src="{{ asset('storage/' . $product->img_file) }}" alt="{{ $product->titel }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->titel }}</h2>

                <!-- Beschrijving: groter en breder -->
                <p class="lead" style="font-size: 1.25rem; width: 100%"><strong>Beschrijving:</strong> {{ $product->description }}</p>

                <!-- Prijs en winkelwagen naast elkaar -->
                <div class="d-flex align-items-center">
                    <p class="h4 font-weight-bold mb-0" style="margin-right: 15px;">€{{ $product->price }}</p>
                    <a href="#" class="btn btn-primary">In winkelwagen</a>
                </div>

                <p><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                <p><strong>Maat:</strong> {{ $product->size }}</p>
                <p><strong>Aantal beschikbaar:</strong> {{ $product->quantity }}</p>
            </div>
        </div>
    </div>
@endsection



@extends('layouts.base')


@section('content')
<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <!-- Product Image -->
                    <img src="{{ asset('storage/' . $product->img_file) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <!-- Product Title -->
                        <h5 class="card-title">{{ $product->titel }}</h5>
                        <!-- Product Description -->
                        <p class="card-text">{{ $product->description }}</p>
                        <!-- Product Price -->
                        <p class="card-text"><strong>Prijs:</strong> €{{ number_format($product->price / 100, 2, ',', '.') }}</p>
                        <!-- Product Gender -->
                        <p class="card-text"><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                        <!-- Product Size -->
                        <p class="card-text"><strong>Maat:</strong> {{ $product->size }}</p>
                        <!-- Product Quantity -->
                        <p class="card-text"><strong>Aantal beschikbaar:</strong> {{ $product->quantity }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary w-100">In winkelwagen</a> <!-- Full width button -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

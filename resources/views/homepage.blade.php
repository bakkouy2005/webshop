@extends('layouts.base')

@section('content')
    <div class="hero">
        <!-- Logo above text with animation -->
        <img src="/img/logo.png" alt="Logo" class="hero-logo">
        
        <!-- Hero text with animation -->
        <h1 class="hero-text">Welkom bij FC LALIGA, hier vind je de beste en goedkoopste kits van alle soorten La Liga-teams!</h1>
    </div>

    <div class="container content mt-5">
        <h2 class="text-center mb-4 fade-in-scroll">Random Producten</h2>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4 fade-in-scroll">
                    <div class="card shadow-sm position-relative">
                        <!-- Product Size Badge -->
                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">{{ $product->size }}</span>

                        <!-- Product Image -->
                        <a href="{{ route('products.show', $product->id) }}">
    <img src="{{ asset('storage/' . $product->img_file) }}" alt="{{ $product->titel }}" class="card-img-top">
</a>


                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->titel }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-price">€{{ $product->price }}</p>
                            <a href="#" class="btn btn-primary">In winkelwagen</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Function to check if elements are in view
        function isInView(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        // Add 'in-view' class to elements as they come into view
        function checkScroll() {
            const elements = document.querySelectorAll('.fade-in-scroll');
            elements.forEach(el => {
                if (isInView(el)) {
                    el.classList.add('in-view');
                }
            });
        }

        // Trigger scroll check on load and scroll
        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);
    </script>
@endsection


@extends('layouts.base')

@section('content')
    <div class="hero">
        
        <img src="/img/logo.png" alt="Logo" class="hero-logo">
        
  
        <h1 class="hero-text">Welkom bij FC LALIGA, hier vind je de beste en goedkoopste kits van alle soorten La Liga-teams!</h1>
    </div>

    <div class="container py-5">
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded position-relative">
                        
                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">{{ $product->size }}</span>
                        
                     
                        <a href="{{ route('products.show', $product->id) }}">
                            <img src="{{ asset('storage/' . $product->img_file) }}" alt="{{ $product->titel }}" class="card-img-top" style="height: 430px; width: 100%; object-fit: cover;">
                        </a>

                        <div class="card-body text-center product-card-body">
                           
                            <h5 class="card-title">{{ $product->titel }}</h5>
                          
                            <p class="card-text">{{ $product->description }}</p>

                        
                            @if($product->deals != 0.00)
                               
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">Deals</span>
                               
                                <p class="card-text text-muted" style="text-decoration: line-through;">€{{ $product->price }}</p>
                                
                                <p class="card-text text-danger"><strong>€{{ $product->deals }}</strong></p>
                            @else
                                
                                <p class="card-text"><strong>Prijs:</strong> €{{ $product->price }}</p>
                            @endif

                            
                            <p class="card-text"><strong>Geslacht:</strong> {{ ucfirst($product->gender) }}</p>
                            
                            
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary w-100">In winkelwagen</a> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Functie om te checken of elementen in zicht zijn
        function isInView(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        // Voeg 'in-view' class toe aan elementen als ze in beeld komen
        function checkScroll() {
            const elements = document.querySelectorAll('.fade-in-scroll');
            elements.forEach(el => {
                if (isInView(el)) {
                    el.classList.add('in-view');
                }
            });
        }

        // Trigger scroll check bij laden en scrollen
        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);
    </script>
@endsection

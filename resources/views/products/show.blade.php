@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{ asset('storage/' . $product->img_file) }}" alt="{{ $product->titel }}" class="img-fluid" style="max-height: 700px; object-fit: cover; width: 100%;">
            </div>

            
            <div class="col-md-6">
                <h2 style="font-size: 2.1rem; font-weight: bold;">{{ $product->titel }}</h2>
                @if($product->deals != 0.00)
                               
                                
                               
                                <p class="card-text text-muted" style="text-decoration: line-through; font-size: 1.5rem; ">€{{ $product->price }}</p>
                                
                                <p class="card-text text-danger " style="font-size: 2.1rem;"><strong>€{{ $product->deals }}</strong></p>
                            @else
                                
                                <p class="card-text" style="font-size: 2.1rem;"><strong>€{{ $product->price }}</strong></p>
                            @endif

               
                @if(!auth()->check())
                    <div class="alert alert-danger" role="alert">
                        Je moet ingelogd zijn om dit product aan je winkelwagen toe te voegen!
                    </div>
                @endif

                
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    
                    <p><strong>Maat:</strong></p>
                    <div class="mb-3">
                        @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                            <label class="btn btn-outline-secondary custom-radio">
                                <input type="radio" name="size" value="{{ $size }}" required> {{ $size }}
                            </label>
                        @endforeach
                    </div>

                    
                    <p><strong>Kies een badge:</strong></p>
                    <div class="mb-3">
                        <label class="btn btn-outline-secondary custom-radio">
                            <input type="radio" name="choose_patch" value="Geen" required>
                            <span><img src="/images/no-badge.png" alt="Geen" style="width: 50px;"></span>
                        </label>
                        <label class="btn btn-outline-secondary custom-radio">
                            <input type="radio" name="choose_patch" value="La Liga">
                            <span><img src="/images/laliga.png" alt="La Liga" style="width: 50px;"></span>
                        </label>
                        <label class="btn btn-outline-secondary custom-radio">
                            <input type="radio" name="choose_patch" value="Champions League">
                            <span><img src="/images/ucl.png" alt="Champions League" style="width: 50px;"></span>
                        </label>
                    </div>

                    
                    @if(auth()->check())
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Toevoegen aan winkelwagen</button>
                    @else
                        <button type="button" class="btn btn-secondary btn-lg mt-3" disabled>Inloggen vereist</button>
                    @endif
                </form>

               
                <p class="mt-4" style="font-size: 1.1rem; width: 100%; line-height: 1.6;">
                    <strong>Beschrijving:</strong> {{ $product->description }}
                </p>
            </div>
        </div>
        
    </div>
@endsection

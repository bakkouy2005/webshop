@extends('layouts.base')

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title">Product bewerken</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Titel -->
                <div class="mb-3">
                    <label for="titel" class="form-label">Titel</label>
                    <input type="text" name="titel" class="form-control" value="{{ $product->titel }}" required>
                </div>
                
                <!-- Prijs -->
                <div class="mb-3">
                    <label for="price" class="form-label">Prijs</label>
                    <input type="decimal" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>

                <!-- Afbeelding -->
                <div class="mb-3">
                    <label for="img_file" class="form-label">Afbeelding Bestand</label>
                    <input type="file" name="img_file" class="form-control-file">
                    @if($product->img_file)
                        <div class="mt-2">
                            <img src="{{ asset('' . $product->img_file) }}" alt="Afbeelding" class="img-thumbnail" style="max-width: 150px;">
                            <p>Huidige afbeelding</p>
                        </div>
                    @endif
                </div>
                
                <!-- Beschrijving -->
                <div class="mb-3">
                    <label for="description" class="form-label">Beschrijving</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
                </div>

                <!-- prijs deals -->

                <div class="mb-3">
                    <label for="deals" class="form-label">Deals</label>
                    <input type="decimal" name="deals" class="form-control" value="{{ $product->deals }}" required>
                </div>
                
                
                <!-- gender  -->

                <div class="mb-3">
                    <label for="gender" class="form-label">Kies Geslacht</label>
                    <select name="gender" class="form-select" required>
                        <option value="unisex" {{ $product->choose_patch == 'unisex' ? 'selected' : '' }}>unisex</option>
                        <option value="man" {{ $product->choose_patch == 'man' ? 'selected' : '' }}>man</option>
                        <option value="vrouw" {{ $product->choose_patch == 'vrouw' ? 'selected' : '' }}>vrouw</option>
                    </select>
                </div>
               

                <!-- Aantal -->
                <div class="mb-3">
                    <label for="quantity" class="form-label">Aantal</label>
                    <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Bijwerken</button>
            </form>
        </div>
    </div>
</div>

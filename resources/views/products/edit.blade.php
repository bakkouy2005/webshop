@extends('layouts.app')

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title">Product bewerken</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
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
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>

                <!-- Afbeelding -->
                <div class="mb-3">
                    <label for="img_file" class="form-label">Afbeelding Bestand</label>
                    <input type="text" name="img_file" class="form-control" value="{{ $product->img_file }}" required>
                </div>
                
                <!-- Beschrijving -->
                <div class="mb-3">
                    <label for="description" class="form-label">Beschrijving</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
                </div>

                <!-- Geslacht -->
                <div class="mb-3">
                    <label for="gender" class="form-label">Geslacht</label>
                    <select name="gender" class="form-select" required>
                        <option value="male" {{ $product->gender == 'male' ? 'selected' : '' }}>Man</option>
                        <option value="female" {{ $product->gender == 'female' ? 'selected' : '' }}>Vrouw</option>
                        <option value="unisex" {{ $product->gender == 'unisex' ? 'selected' : '' }}>Unisex</option>
                    </select>
                </div>

                <!-- Kies Patch -->
                <div class="mb-3">
                    <label for="choose_patch" class="form-label">Kies Patch</label>
                    <select name="choose_patch" class="form-select" required>
                        <option value="none" {{ $product->choose_patch == 'none' ? 'selected' : '' }}>Geen Patch</option>
                        <option value="ucl" {{ $product->choose_patch == 'ucl' ? 'selected' : '' }}>UCL</option>
                        <option value="laliga" {{ $product->choose_patch == 'laliga' ? 'selected' : '' }}>La Liga</option>
                    </select>
                </div>
                
                <!-- Maat -->
                <div class="mb-3">
                    <label for="size" class="form-label">Maat</label>
                    <select name="size" class="form-select" required>
                        <option value="XS" {{ $product->size == 'XS' ? 'selected' : '' }}>XS</option>
                        <option value="S" {{ $product->size == 'S' ? 'selected' : '' }}>S</option>
                        <option value="M" {{ $product->size == 'M' ? 'selected' : '' }}>M</option>
                        <option value="L" {{ $product->size == 'L' ? 'selected' : '' }}>L</option>
                        <option value="XL" {{ $product->size == 'XL' ? 'selected' : '' }}>XL</option>
                        <option value="XXL" {{ $product->size == 'XXL' ? 'selected' : '' }}>XXL</option>
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

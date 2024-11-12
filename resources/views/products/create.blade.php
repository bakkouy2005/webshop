@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Nieuw product toevoegen</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Beschrijving</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Prijs</label>
                <input type="decimal" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="img_file">Afbeelding Bestand</label>
                <input type="text" name="img_file" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">Geslacht</label>
                <select name="gender" class="form-control" required>
                    <option value="male">Man</option>
                    <option value="female">Vrouw</option>
                    <option value="unisex">Unisex</option>
                </select>
            </div>
            <div class="form-group">
                <label for="choose_patch">Kies Patch</label>
                <select name="choose_patch" class="form-control" required>
                    <option value="none">Geen Patch</option>
                    <option value="ucl">UCL</option>
                    <option value="laliga">La Liga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size">Maat</label>
                <select name="size" class="form-control" required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Aantal</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection


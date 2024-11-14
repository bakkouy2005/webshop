@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>Nieuw product toevoegen</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
                <input type="file" name="img_file" class="form-control-file">
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
                <label for="choose_patch">Deals :</label>
                <input type="decimal" name="deals" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">Aantal</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection

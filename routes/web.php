<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;




Route::get('/', function () {
    // Haal willekeurige producten op
    $products = App\Models\Product::inRandomOrder()->take(6)->get(); // Pas het aantal producten aan indien nodig

    return view('homepage', compact('products'));
});

// Auth routes (voor login, registratie, etc.)
Auth::routes();

// Home route
Route::get('/home', [HomeController::class, 'index'])->name('home');
// In web.php
Route::get('/kit', [ProductController::class, 'showAllProducts'])->name('kit');

Route::get('/homepage', [ProductController::class, 'showAllProducts'])->name('homepage');

// Voeg deze regel toe voor het opslaan van de bestelling
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');






// Product resource route (voor CRUD-functies van Product)
Route::resource('products', ProductController::class);

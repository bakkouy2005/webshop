<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Zorg ervoor dat je het juiste model importeert

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Valideer de binnenkomende data
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'size' => 'required',
            'choose_patch' => 'required',
        ]);

        // Maak een nieuwe bestelling aan
        $order = Order::create([
            'product_id' => $request->product_id,
            'size' => $request->size,
            'choose_patch' => $request->choose_patch,
            // Voeg hier andere velden toe die je nodig hebt
        ]);

        // Redirect naar een pagina (bijvoorbeeld een bedankpagina) na het opslaan
        return redirect()->route('order.success'); // Zorg ervoor dat je deze route hebt gedefinieerd
    }
}

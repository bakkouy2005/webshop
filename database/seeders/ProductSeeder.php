<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelproducts;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        $product = new Product();
        $product->titel = 'Fc barcelona kit';
        $product->price = 60;
        $product->img_file = '';
        $product->description = 'prince stinkt man';
        $product->gender = 'Magnetron';
        $product->deals = 40;
        $product->quantity = 400;
        $product->save();

        $product = new Product();
        $product->titel = 'Fc barcelona kit';
        $product->price = 30;
        $product->img_file = '';
        $product->description = 'prince stinkt man';
        $product->gender = 'Magnetron';
        $product->deals = 90;
        $product->quantity = 400;
        $product->save();
    }
}

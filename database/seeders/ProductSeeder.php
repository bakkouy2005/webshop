<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelproducts;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->titel = 'Fc barcelona kit';
        $product->price = 60;
        $product->img_file = 'urlr454564563';
        $product->description = 'prince stinkt man';
        $product->gender = 'Magnetron';
        $product->choose_patch = 'ucl';
        $product->size = 'M';
        $product->quantity = 400;
        $product->save();

        $product = new Product();
        $product->titel = 'Fc barcelona kit';
        $product->price = 60;
        $product->img_file = 'urlr454564563';
        $product->description = 'prince stinkt man';
        $product->gender = 'Magnetron';
        $product->choose_patch = 'ucl';
        $product->size = 'M';
        $product->quantity = 400;
        $product->save();
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
          'title' => 'Harry Poter',
          'description' => 'Super Cool - at least as a child.',
          'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
          'title' => 'Harry Poter',
          'description' => 'Super Cool - at least as a child.',
          'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
          'title' => 'Harry Poter',
          'description' => 'Super Cool - at least as a child.',
          'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
          'title' => 'Harry Poter',
          'description' => 'Super Cool - at least as a child.',
          'price' => 10
        ]);
        $product->save();
    }
}

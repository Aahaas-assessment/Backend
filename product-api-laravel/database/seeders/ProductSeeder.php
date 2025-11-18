<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wireless Bluetooth Headphones',
                'description' => 'High-quality wireless headphones with noise cancellation and 30-hour battery life.',
                'price' => 199.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=500&fit=crop'
            ],
            [
                'name' => 'Smart Watch Series 5',
                'description' => 'Feature-rich smartwatch with health monitoring and GPS tracking.',
                'price' => 299.99,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&h=500&fit=crop'
            ],
            [
                'name' => 'Professional Laptop Backpack',
                'description' => 'Durable and stylish backpack with laptop compartment and USB charging port.',
                'price' => 79.99,
                'image_url' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&h=500&fit=crop'
            ],
            [
                'name' => 'Mechanical Gaming Keyboard',
                'description' => 'RGB mechanical keyboard with blue switches and programmable keys.',
                'price' => 129.99,
                'image_url' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=500&fit=crop'
            ],
            [
                'name' => 'Wireless Ergonomic Mouse',
                'description' => 'Ergonomic wireless mouse with precision tracking and long battery life.',
                'price' => 49.99,
                'image_url' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&h=500&fit=crop'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
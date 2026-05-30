<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'shop_name' => null,
                'shop_url' => null,
                'phone' => null,
                'address' => null,
                'city' => null,
                'state' => null,
                'zip_code' => null,
                'country_id' => null,
                'photo' => null,
                'bactive' => null,
                'bkey' => null,
                'status_id' => 1,
                'role_id' => 1,
                'remember_token' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Demo Seller',
                'email' => 'seller@example.com',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'shop_name' => 'Fresh Foods Store',
                'shop_url' => 'fresh-foods-store',
                'phone' => '+1 234 567 8901',
                'address' => '456 Market Street',
                'city' => 'New York',
                'state' => 'NY',
                'zip_code' => '10001',
                'country_id' => 1,
                'photo' => null,
                'bactive' => null,
                'bkey' => null,
                'status_id' => 1,
                'role_id' => 3,
                'remember_token' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $categories = [
            ['name' => 'Vegetables', 'slug' => 'vegetables', 'thumbnail' => '01072022115801-600x600-vegetables.png'],
            ['name' => 'Fruits', 'slug' => 'fruits', 'thumbnail' => '01072022120122-600x600-fruit.png'],
            ['name' => 'Nuts & Seeds', 'slug' => 'nuts-and-seeds', 'thumbnail' => '01072022120255-600x600-nutt-and-seeds.png'],
            ['name' => 'Bread & Bakery', 'slug' => 'bread-and-bakery', 'thumbnail' => '01072022120359-600x600-bread-and-bakery.png'],
            ['name' => 'Juice', 'slug' => 'juice', 'thumbnail' => '01072022120554-600x600-juice.png'],
            ['name' => 'Fast Food', 'slug' => 'fast-food', 'thumbnail' => '01072022120657-600x600-fast-food.png'],
            ['name' => 'Milk & Dairy', 'slug' => 'milk-and-dairy', 'thumbnail' => '01072022120745-600x600-milk-and-dairy.png'],
            ['name' => 'Fresh Meat', 'slug' => 'fresh-meat', 'thumbnail' => '01072022120831-600x600-fresh-meat.png'],
        ];

        foreach ($categories as $category) {
            DB::table('pro_categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'thumbnail' => $category['thumbnail'],
                'subheader_image' => null,
                'description' => $category['name'] . ' category',
                'layout' => 'left_sidebar',
                'lan' => 'en',
                'parent_id' => null,
                'is_subheader' => 0,
                'is_publish' => 1,
                'og_title' => null,
                'og_image' => null,
                'og_description' => null,
                'og_keywords' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $brands = [
            ['name' => 'Brand 1', 'thumbnail' => '09092022091517-brand-1.png'],
            ['name' => 'Brand 2', 'thumbnail' => '09092022091519-brand-2.png'],
            ['name' => 'Brand 3', 'thumbnail' => '09092022091522-brand-3.png'],
            ['name' => 'Brand 4', 'thumbnail' => '09092022091524-brand-4.png'],
            ['name' => 'Brand 5', 'thumbnail' => '09092022091526-brand-5.png'],
            ['name' => 'Brand 6', 'thumbnail' => '09092022091528-brand-6.png'],
        ];

        foreach ($brands as $index => $brand) {
            DB::table('brands')->insert([
                'name' => $brand['name'],
                'thumbnail' => $brand['thumbnail'],
                'is_featured' => $index < 3 ? 1 : 0,
                'is_publish' => 1,
                'lan' => 'en',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $products = [
            ['title' => 'Fresh Garlic', 'slug' => 'fresh-garlic', 'image' => '18082022123324-600x600-1-garlic.jpg', 'price' => 4.99, 'cat_id' => 1, 'brand_id' => 1],
            ['title' => 'Organic Garlic Pack', 'slug' => 'organic-garlic-pack', 'image' => '18082022123333-600x600-2-garlic.jpg', 'price' => 6.49, 'cat_id' => 1, 'brand_id' => 2],
            ['title' => 'Premium Garlic Bulbs', 'slug' => 'premium-garlic-bulbs', 'image' => '18082022123337-600x600-3-garlic.jpg', 'price' => 5.99, 'cat_id' => 1, 'brand_id' => 3],
            ['title' => 'Red Pepper', 'slug' => 'red-pepper', 'image' => '18082022135056-600x600-1-red-pepper.jpg', 'price' => 3.49, 'cat_id' => 1, 'brand_id' => 1],
            ['title' => 'Fresh Red Peppers', 'slug' => 'fresh-red-peppers', 'image' => '18082022135100-600x600-2-red-pepper.jpg', 'price' => 4.29, 'cat_id' => 1, 'brand_id' => 4],
            ['title' => 'Sweet Red Pepper', 'slug' => 'sweet-red-pepper', 'image' => '18082022135103-600x600-3-red-pepper.jpg', 'price' => 3.99, 'cat_id' => 1, 'brand_id' => 5],
            ['title' => 'Mixed Vegetables', 'slug' => 'mixed-vegetables', 'image' => '01072022115801-600x600-vegetables.png', 'price' => 8.99, 'cat_id' => 1, 'brand_id' => 6],
            ['title' => 'Fresh Fruits Basket', 'slug' => 'fresh-fruits-basket', 'image' => '01072022120122-600x600-fruit.png', 'price' => 12.99, 'cat_id' => 2, 'brand_id' => 1],
            ['title' => 'Organic Nuts Mix', 'slug' => 'organic-nuts-mix', 'image' => '01072022120255-600x600-nutt-and-seeds.png', 'price' => 9.99, 'cat_id' => 3, 'brand_id' => 2],
            ['title' => 'Fresh Bread Loaf', 'slug' => 'fresh-bread-loaf', 'image' => '01072022120359-600x600-bread-and-bakery.png', 'price' => 3.99, 'cat_id' => 4, 'brand_id' => 3],
            ['title' => 'Fresh Orange Juice', 'slug' => 'fresh-orange-juice', 'image' => '01072022120554-600x600-juice.png', 'price' => 5.49, 'cat_id' => 5, 'brand_id' => 4],
            ['title' => 'Gourmet Burger', 'slug' => 'gourmet-burger', 'image' => '01072022120657-600x600-fast-food.png', 'price' => 7.99, 'cat_id' => 6, 'brand_id' => 5],
        ];

        foreach ($products as $index => $product) {
            DB::table('products')->insert([
                'title' => $product['title'],
                'slug' => $product['slug'],
                'f_thumbnail' => $product['image'],
                'short_desc' => 'High quality ' . strtolower($product['title']) . ' available now.',
                'description' => '<p>Fresh and premium quality ' . strtolower($product['title']) . ' delivered to your door.</p>',
                'extra_desc' => null,
                'cost_price' => $product['price'] * 0.6,
                'sale_price' => $product['price'],
                'old_price' => $product['price'] + 2,
                'start_date' => null,
                'end_date' => null,
                'is_discount' => 0,
                'is_stock' => 1,
                'sku' => 'SKU-' . str_pad((string) ($index + 1), 4, '0', STR_PAD_LEFT),
                'stock_status_id' => 1,
                'stock_qty' => 100,
                'u_stock_qty' => 0,
                'category_ids' => (string) $product['cat_id'],
                'cat_id' => $product['cat_id'],
                'brand_id' => $product['brand_id'],
                'collection_id' => null,
                'label_id' => null,
                'variation_color' => null,
                'variation_size' => null,
                'tax_id' => null,
                'is_featured' => $index < 6 ? 1 : 0,
                'is_publish' => 1,
                'user_id' => 2,
                'lan' => 'en',
                'og_title' => null,
                'og_image' => null,
                'og_description' => null,
                'og_keywords' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $sliderDesc = json_encode([
            'sub_title' => 'Quality groceries delivered to your door',
            'layer_image_1' => '',
            'layer_image_2' => '',
            'layer_image_3' => '',
            'button_text' => 'Shop Now',
            'target' => '',
        ]);

        DB::table('sliders')->insert([
            [
                'slider_type' => 'home_1',
                'url' => '/search?keyword=',
                'image' => '18082022135936-home1-bg-slider.jpg',
                'title' => 'Fresh Groceries Delivered',
                'desc' => $sliderDesc,
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slider_type' => 'home_1',
                'url' => '/search?keyword=',
                'image' => '18082022135936-400x400-home1-bg-slider.jpg',
                'title' => 'Daily Deals',
                'desc' => json_encode([
                    'sub_title' => 'Save big on fresh produce every day',
                    'layer_image_1' => '',
                    'layer_image_2' => '',
                    'layer_image_3' => '',
                    'button_text' => 'View Deals',
                    'target' => '',
                ]),
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        DB::table('section_manages')->insert([
            [
                'manage_type' => 'home_1',
                'section' => 'section_1',
                'title' => null,
                'url' => null,
                'image' => '01072022095731-h1-layer1.png',
                'desc' => null,
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'manage_type' => 'home_1',
                'section' => 'section_2',
                'title' => 'Shop By Category',
                'url' => null,
                'image' => null,
                'desc' => 'Browse our wide range of fresh products.',
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'manage_type' => 'home_1',
                'section' => 'section_3',
                'title' => 'Featured Products',
                'url' => null,
                'image' => null,
                'desc' => 'Our most popular items this week.',
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'manage_type' => 'home_1',
                'section' => 'section_4',
                'title' => 'Top Brands',
                'url' => null,
                'image' => null,
                'desc' => 'Shop from trusted brands.',
                'is_publish' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        DB::table('menus')->insert([
            [
                'menu_name' => 'Header Menu',
                'menu_position' => 'header',
                'lan' => 'en',
                'status_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        DB::table('menu_parents')->insert([
            [
                'menu_id' => 1,
                'menu_type' => 'custom_link',
                'child_menu_type' => null,
                'item_id' => null,
                'item_label' => 'Home',
                'custom_url' => '/',
                'target_window' => '_self',
                'css_class' => null,
                'column' => null,
                'width_type' => null,
                'width' => null,
                'lan' => 'en',
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'menu_id' => 1,
                'menu_type' => 'custom_link',
                'child_menu_type' => null,
                'item_id' => null,
                'item_label' => 'Shop',
                'custom_url' => '/search?keyword=',
                'target_window' => '_self',
                'css_class' => null,
                'column' => null,
                'width_type' => null,
                'width' => null,
                'lan' => 'en',
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'menu_id' => 1,
                'menu_type' => 'custom_link',
                'child_menu_type' => null,
                'item_id' => null,
                'item_label' => 'Contact',
                'custom_url' => '/contact',
                'target_window' => '_self',
                'css_class' => null,
                'column' => null,
                'width_type' => null,
                'width' => null,
                'lan' => 'en',
                'sort_order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

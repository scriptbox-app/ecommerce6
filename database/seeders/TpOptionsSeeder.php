<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TpOptionsSeeder extends Seeder
{
    public function run(): void
    {
        $options = [
            'vipc' => ['bactive' => 1, 'resetkey' => 5],
            'page_variation' => [
                'home_variation' => 'home_1',
                'category_variation' => 'left_sidebar',
                'brand_variation' => 'left_sidebar',
                'seller_variation' => 'left_sidebar',
            ],
            'general_settings' => [
                'site_name' => 'bShop',
                'site_title' => 'Laravel eCommerce Shopping Platform',
                'company' => 'bShop Inc.',
                'email' => 'info@example.com',
                'phone' => '+1 234 567 8900',
                'address' => '123 Main Street, New York, NY',
                'timezone' => 'UTC',
            ],
            'currency' => [
                'currency_name' => 'USD',
                'currency_icon' => '$',
                'currency_position' => 'left',
                'thousands_separator' => 'comma',
                'decimal_separator' => 'point',
                'decimal_digit' => '2',
            ],
            'theme_logo' => [
                'favicon' => '22122024093638-400x400-logo.png',
                'front_logo' => '22122024093638-400x400-logo.png',
                'back_logo' => '22122024093638-400x400-logo.png',
            ],
            'theme_color' => [
                'theme_color' => '#61a402',
                'green_color' => '#65971e',
                'light_green_color' => '#daeac5',
                'lightness_green_color' => '#fdfff8',
                'gray_color' => '#8d949d',
                'dark_gray_color' => '#595959',
                'light_gray_color' => '#e7e7e7',
                'black_color' => '#232424',
                'white_color' => '#ffffff',
            ],
            'theme_option_header' => [
                'address' => '123 Main Street, New York, NY',
                'phone' => '+1 234 567 8900',
                'is_publish' => 1,
            ],
            'theme_option_footer' => [
                'about_logo' => '22122024093638-400x400-logo.png',
                'about_desc' => 'Your trusted online grocery and food store.',
                'is_publish_about' => 1,
                'address' => '123 Main Street, New York, NY',
                'phone' => '+1 234 567 8900',
                'email' => 'info@example.com',
                'is_publish_contact' => 1,
                'copyright' => 'Copyright © 2024 bShop. All rights reserved.',
                'is_publish_copyright' => 1,
                'payment_gateway_icon' => '',
                'is_publish_payment' => 0,
            ],
            'language_switcher' => [
                'is_language_switcher' => 0,
            ],
            'cash_on_delivery' => [
                'isenable' => 1,
                'description' => 'Pay when you receive your order.',
            ],
            'bank_transfer' => [
                'isenable' => 0,
                'description' => '',
            ],
            'seller_settings' => [
                'seller_auto_publish' => 1,
                'seller_fee' => 0,
            ],
        ];

        foreach ($options as $name => $value) {
            DB::table('tp_options')->insert([
                'option_name' => $name,
                'option_value' => json_encode($value),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

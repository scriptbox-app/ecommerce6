<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LookupTablesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('languages')->insert([
            [
                'language_code' => 'en',
                'language_name' => 'English',
                'flag' => null,
                'language_default' => 1,
                'is_rtl' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('user_roles')->insert([
            ['role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Customer', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Seller', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('user_status')->insert([
            ['status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tp_status')->insert([
            ['status' => 'Published', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Draft', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('payment_method')->insert([
            ['method_name' => 'Cash on Delivery', 'created_at' => now(), 'updated_at' => now()],
            ['method_name' => 'Bank Transfer', 'created_at' => now(), 'updated_at' => now()],
            ['method_name' => 'Stripe', 'created_at' => now(), 'updated_at' => now()],
            ['method_name' => 'PayPal', 'created_at' => now(), 'updated_at' => now()],
            ['method_name' => 'Razorpay', 'created_at' => now(), 'updated_at' => now()],
            ['method_name' => 'Mollie', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('payment_status')->insert([
            ['pstatus_name' => 'Completed', 'created_at' => now(), 'updated_at' => now()],
            ['pstatus_name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['pstatus_name' => 'Canceled', 'created_at' => now(), 'updated_at' => now()],
            ['pstatus_name' => 'Incomplete', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('order_status')->insert([
            ['ostatus_name' => 'Awaiting processing', 'created_at' => now(), 'updated_at' => now()],
            ['ostatus_name' => 'Processing', 'created_at' => now(), 'updated_at' => now()],
            ['ostatus_name' => 'Ready for pickup', 'created_at' => now(), 'updated_at' => now()],
            ['ostatus_name' => 'Completed', 'created_at' => now(), 'updated_at' => now()],
            ['ostatus_name' => 'Canceled', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('withdrawal_status')->insert([
            ['status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Processing', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Completed', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Rejected', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('countries')->insert([
            ['country_name' => 'United States', 'is_publish' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['country_name' => 'United Kingdom', 'is_publish' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['country_name' => 'Bangladesh', 'is_publish' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('shipping')->insert([
            [
                'title' => 'Standard Shipping',
                'shipping_fee' => 5.00,
                'desc' => 'Delivery within 5-7 business days.',
                'is_publish' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Express Shipping',
                'shipping_fee' => 15.00,
                'desc' => 'Delivery within 1-2 business days.',
                'is_publish' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

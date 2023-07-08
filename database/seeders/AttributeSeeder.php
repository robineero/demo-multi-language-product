<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::create(['key' => 'product_name', 'name' => 'Product name attribute', 'comment' => '']);
        Attribute::create(['key' => 'product_category', 'name' => 'Product category attribute', 'comment' => '']);
        Attribute::create(['key' => 'product_description', 'name' => 'Product description attribute', 'comment' => '']);
    }
}

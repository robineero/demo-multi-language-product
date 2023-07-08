<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create(['code' => 'en', 'name' => 'English']);
        Language::create(['code' => 'fi', 'name' => 'Finnish']);
    }
}

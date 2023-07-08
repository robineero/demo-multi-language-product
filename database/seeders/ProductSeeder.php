<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Language;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = Attribute::all()->pluck('id', 'key');
        $languages = Language::all()->pluck('id', 'code');

        $product = Product::create();

        $product->attributes()->attach($attributes['product_name'], ['language_id' => $languages['en'], 'value' => 'iPhone 14 Plus']);
        $product->attributes()->attach($attributes['product_category'], ['language_id' => $languages['en'], 'value' => 'Phones']);
        $product->attributes()->attach($attributes['product_description'], ['language_id' => $languages['en'], 'value' => 'The iPhone 14 Plus display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.68 inches diagonally (actual viewable area is less).']);

        $product->attributes()->attach($attributes['product_name'], ['language_id' => $languages['fi'], 'value' => 'iPhone 14 Plus']);
        $product->attributes()->attach($attributes['product_category'], ['language_id' => $languages['fi'], 'value' => 'Puhelimet']);
        $product->attributes()->attach($attributes['product_description'], ['language_id' => $languages['fi'], 'value' => 'iPhone 14 Plussan näyttö ulottuu puhelimen kauniisti kaareutuviin kulmiin, jotka rajautuvat säännöllisen suorakaiteen muotoon. Jos näyttö mitataan suorakaiteena, sen lävistäjä on 6,68 tuumaa (näyttöalueen koko on pienempi).']);

        $product = Product::create();

        $product->attributes()->attach($attributes['product_name'], ['language_id' => $languages['en'], 'value' => 'AirPods (3rd generation) with MagSafe Charging Case']);
        $product->attributes()->attach($attributes['product_category'], ['language_id' => $languages['en'], 'value' => 'Made by Apple']);
        $product->attributes()->attach($attributes['product_description'], ['language_id' => $languages['en'], 'value' => 'AirPods are lightweight and offer a contoured design. They sit at just the right angle for comfort and to better direct audio to your ear. The stem is 33 percent shorter than AirPods (2nd generation) and includes a force sensor to easily control music and calls.']);

        $product->attributes()->attach($attributes['product_name'], ['language_id' => $languages['fi'], 'value' => 'AirPods (3. sukupolvi) ja MagSafe-latauskotelo']);
        $product->attributes()->attach($attributes['product_category'], ['language_id' => $languages['fi'], 'value' => 'Applen tekemät']);
        $product->attributes()->attach($attributes['product_description'], ['language_id' => $languages['fi'], 'value' => 'AirPods-kuulokkeet ovat kevyet, ja niissä on virtaviivainen istuvuus. Ne asettuvat miellyttävästi juuri oikeaan kulmaan suunnaten äänen paremmin korviisi. Varsi on 33 % lyhyempi verrattuna toisen sukupolven AirPodeihin. Varressa on painalluksen tunnistin musiikin ja puheluiden helppoon hallintaan.']);
    }
}

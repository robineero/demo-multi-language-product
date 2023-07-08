<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Language;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $languageCode = $request->get('lang') ?? "en";
        $language = Language::where('code', $languageCode)->first();
        $languageId = $language->id ?? 1;

        $query = Product::query();

        $query->with(['attributes' => function ($q) use ($languageId) {
            $q->wherePivot('language_id', '=', $languageId);
        }]);

        $products = $query->get();

        return ProductResource::collection($products);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'language_id',
        'attribute_id',
        'value',
        'comment',
    ];
}

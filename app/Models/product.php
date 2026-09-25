<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'stock',
        'sku',
        'image',
        'is_active',
        'is_featured',
        'views',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

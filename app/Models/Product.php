<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    /**
     * Atribut yang tidak dapat diisi
     */
    protected $guarded = [

    ];

    /**
     * Relasi one-to-many dengan tabel 'product_images'
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productImages() {
        return $this->hasMany(ProductImage::class);
    }
}

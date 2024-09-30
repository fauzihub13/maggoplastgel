<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * Atribut yang tidak dapat diisi
     */
    protected $guarded = [

    ];

    protected $dates = [
        'deleted_at'
    ];

    /**
     * Relasi one-to-many dengan tabel 'product_images'
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productImages() {
        return $this->hasMany(ProductImage::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function articleCategory() {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function scopeNotInTrash($query) {
        return $query->whereNull('deleted_at');
    }

    public function scopePublish($query) {
        return $query->where('status', 'publish')->whereNull('deleted_at');
    }

    public function scopeDraft($query) {
        return $query->where('status', 'draft')->whereNull('deleted_at');
    }

    public function scopePending($query) {
        return $query->where('status', 'pending')->whereNull('deleted_at');
    }

    public function scopeTrash($query) {
        return $query->whereNotNull('deleted_at');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['title', 'slug', 'content', 'is_published', 'category_id'];
    protected $casts = [
        'is_published' => 'boolean',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

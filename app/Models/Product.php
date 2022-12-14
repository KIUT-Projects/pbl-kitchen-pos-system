<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['category_id', 'name', 'slug', 'description', 'price', 'is_published'];

    protected $casts = ['is_published' => 'boolean'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

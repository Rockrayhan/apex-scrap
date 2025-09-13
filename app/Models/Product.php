<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id',
        'name_en',
        'name_zh',
        'slug',
        'image',
        'description_en',
        'description_zh',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // Dynamic attributes based on locale
    public function getNameAttribute()
    {
        $locale = app()->getLocale(); // en or zh
        return $this->{"name_{$locale}"} ?: $this->name_en;
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"description_{$locale}"} ?: $this->description_en;
    }
}

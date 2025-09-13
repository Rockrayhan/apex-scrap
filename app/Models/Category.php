<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name_en', 'name_zh', 'slug'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    // Dynamic accessor
    public function getNameAttribute()
    {
        $locale = app()->getLocale(); // en / zh
        return $this->{"name_{$locale}"} ?: $this->name_en;
    }
}

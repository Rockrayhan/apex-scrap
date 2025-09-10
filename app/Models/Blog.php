<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title_en',
        'title_zh',
        'category',
        'image',
        'description_en',
        'description_zh',
        'featured_in_home'
    ];

    // Dynamic attribute based on locale
    public function getTitleAttribute()
    {
        $locale = app()->getLocale(); // 'en' or 'zh'
        return $this->{"title_{$locale}"} ?: $this->title_en;
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"description_{$locale}"} ?: $this->description_en;
    }
}

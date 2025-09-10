<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'tags', 'team_involvement', 'image', 'category',
        'short_desc', 'services_we_provided', 'industry', 'year',
        'the_problem', 'the_solution', 'the_results',
    ];

    protected $casts = [
        'tags' => 'array',
        'services_we_provided' => 'array',
        // 'the_solution' => 'array',
    ];
}

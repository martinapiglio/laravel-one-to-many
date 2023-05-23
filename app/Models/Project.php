<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'slug', 'thumbnail', 'languages', 'year', 'github_repo'];
    protected $attributes = [
        'year' => 2023
    ];
    use HasFactory;
}

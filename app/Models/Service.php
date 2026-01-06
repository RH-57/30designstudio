<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'headline',
        'headline_description',
        'hero_image',
        'status',
        'meta_title',
        'meta_description',
        'meta_image',
    ];

    public function portfolios() {
        return $this->hasMany(Portfolio::class);
    }
}

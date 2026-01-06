<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'cover',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}

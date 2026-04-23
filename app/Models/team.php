<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'base_location',
        'points',
    ];

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
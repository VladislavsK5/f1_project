<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Driver extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'nationality', 'points', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
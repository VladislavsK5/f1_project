<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // 1. Меняем 'role' на 'role_id'
    protected $fillable = ['name', 'email', 'password', 'role_id'];

    protected $casts = ['password' => 'hashed'];

    public function role()
    {
    return $this->belongsTo(Role::class, 'role_id');
    }

    public function isAdmin(): bool
    {
    $role = $this->role()->first();
    return $role && $role->slug === 'admin';
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username', 'email', 'password', 'user_type',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
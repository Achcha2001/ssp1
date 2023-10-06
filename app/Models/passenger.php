<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Passenger extends Model implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticatableTrait;

    protected $guard = 'passenger'; // Use the correct guard name

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other columns as needed
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

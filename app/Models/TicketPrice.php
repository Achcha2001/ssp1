<?php
// app/Models/TicketPrice.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_class',
        'price',
        'from',
        'to',
    ];
}

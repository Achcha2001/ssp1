<?php
// TrainSchedule.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainSchedule extends Model
{
    protected $fillable = ['from', 'to', 'time'];
}

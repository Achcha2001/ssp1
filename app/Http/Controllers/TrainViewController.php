<?php
// app/Http/Controllers/TrainViewController.php

namespace App\Http\Controllers;

use App\Models\TrainSchedule; // Make sure to import the TrainSchedule model

class TrainViewController extends Controller
{
    public function showTrainSchedule()
    {
        $trainSchedules = TrainSchedule::all(); // Retrieve all train schedules from the database

        return view('train-sch', ['trainSchedules' => $trainSchedules]);
    }
}

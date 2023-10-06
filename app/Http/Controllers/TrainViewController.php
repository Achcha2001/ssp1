<?php


namespace App\Http\Controllers;

use App\Models\TrainSchedule; 

class TrainViewController extends Controller
{
    public function showTrainSchedule()
    {
        $trainSchedules = TrainSchedule::all(); 

        return view('train-sch', ['trainSchedules' => $trainSchedules]);
    }
}

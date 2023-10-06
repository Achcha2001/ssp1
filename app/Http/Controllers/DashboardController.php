<?php

namespace App\Http\Controllers;

use App\Models\TrainSchedule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('admin.dashboard');
    }

    public function showAddTrainScheduleForm()
    {
        $trainSchedules = TrainSchedule::all();
        return view('admin.add-train-schedule')->with('trainSchedules', $trainSchedules);
    }

    public function addTrainSchedule(Request $request)
    {
        $validatedData = $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
        ]);

        TrainSchedule::create($validatedData);

        $trainSchedules = TrainSchedule::all();
        return redirect()->route('add.train.schedule.form')->with('success', 'Train schedule added successfully');
    }

    public function addTicketPrices()
    {
        

        return redirect()->route('add.train.schedule.form')->with('success', 'Ticket prices added successfully');
    }

    public function showTrainSchedule()
    {
        $trainSchedules = TrainSchedule::all();
        return view('admin.train-schedule', ['trainSchedules' => $trainSchedules]);
    }

    public function editTrainSchedule($id)
    {
        $trainSchedule = TrainSchedule::findOrFail($id);
        return view('admin.edit-train-schedule', ['trainSchedule' => $trainSchedule]);
    }

    public function updateTrainSchedule(Request $request, $id)
    {
        $validatedData = $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
        ]);

        $trainSchedule = TrainSchedule::findOrFail($id);
        $trainSchedule->update($validatedData);

        $trainSchedules = TrainSchedule::all();
        return redirect()->route('train.schedule')->with('success', 'Train schedule updated successfully');
    }

    public function deleteTrainSchedule($id)
    {
        $trainSchedule = TrainSchedule::findOrFail($id);
        $trainSchedule->delete();

        $trainSchedules = TrainSchedule::all();
        return redirect()->route('train.schedule')->with('success', 'Train schedule deleted successfully');
    }
}

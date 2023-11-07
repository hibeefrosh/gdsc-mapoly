<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Worker;

class AppController extends Controller
{


    public function locationstore(Request $request)
    {
        $data = $request->validate([
            'location_name' => 'required',
        ]);

        Location::create($data);

        return redirect()->route('recordWorker')->with('success', 'Location created successfully.');
    }

    public function workerview()
    {
        $locations = Location::all();
        return view('createworkers-record', compact('locations'));
    }

    public function workerstore(Request $request)
    {
        Worker::create([
            'worker_name' => $request->input('worker_name'),
            'location_id' => $request->input('location_id'),
            'work_date' => $request->input('work_date'),
        ]);


        return redirect()->route('recordWorker')->with('success', 'Worker recorded successfully.');
    }

    public function fetchRecords(Request $request)
    {
        $selectedMonth = $request->input('selected_month');
        $records = Worker::whereMonth('work_date', date('m', strtotime($selectedMonth)))
            ->whereYear('work_date', date('Y', strtotime($selectedMonth)))
            ->get();

        return view('employee-records', compact('records', 'selectedMonth'));
    }


    public function fetchRecord()
    {
        $selectedMonth=null;
        $records = null;


        return view('employee-records', compact('records', 'selectedMonth'));
    }
}


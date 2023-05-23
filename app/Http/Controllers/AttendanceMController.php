<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'status' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'distance' => 'required|numeric',
    ]);

    // Retrieve the latitude, longitude, and distance values from the request
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');
    $distance = $request->input('distance');

    // Perform any additional server-side logic or database operations with the location and distance values as needed

    // Determine the status based on the distance
    $status = $distance > 2 ? 'Invalid' : $request->input('status');

    // Create a new Attendance record
    Attendance::create([
        'name' => $request->input('name'),
        'status' => $status,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'distance' => $distance,
    ]);

    return redirect()->route('attendance.index')
        ->with('success', 'Attendance created successfully.');
}


    public function show(Attendance $attendance)
    {
        return view('attendance.show', compact('attendance'));
    }

    public function edit(Attendance $attendance)
    {
        return view('attendance.edit', compact('attendance'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $attendance->update($request->all());

        return redirect()->route('attendance.index')
            ->with('success', 'Attendance updated successfully.');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->route('attendance.index')
            ->with('success', 'Attendance deleted successfully.');
    }
}

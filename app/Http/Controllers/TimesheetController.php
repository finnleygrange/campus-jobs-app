<?php

namespace App\Http\Controllers;

use App\Models\timesheet;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timesheets = Timesheet::all(); // Retrieve all Timesheets from the database
        return view('timesheets.index', compact('timesheets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('timesheets.create');
    }

    

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls',
        ]);
    
        try {
            Excel::import(new Timesheet, $request->file('excel_file'));
            return redirect()->route('timesheets.index')->with('success', 'Timesheets imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing timesheets: ' . $e->getMessage());
        }
    }
    



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        // Create a new timesheet record in the database
        Timesheet::create($data);

        return redirect()->route('timesheets.index')->with('success', 'timesheet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $timesheet = Timesheet::findOrFail($id); // Find the timesheet by ID
        return view('timesheets.show', compact('timesheet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $timesheet = timesheet::findOrFail($id); // Find the timesheet by ID
        return view('timesheets.edit', compact('timesheet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the timesheet by ID and update the record in the database
        $timesheet = Timesheet::findOrFail($id);
        $timesheet->update($request->all());

        return redirect()->route('timesheets.index')->with('success', 'timesheet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timesheet = timesheet::findOrFail($id);
        $timesheet->delete();

        return redirect()->route('timesheets.index')->with('success', 'timesheet deleted successfully.');
    }
}

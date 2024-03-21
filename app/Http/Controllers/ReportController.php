<?php

namespace App\Http\Controllers;

use App\Models\report;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selectedWeek = $request->input('week');
        $selectedDate = Carbon::parse($selectedWeek)->startOfWeek();
    
        $reports = Report::whereBetween('created_at', [
            $selectedDate->toDateString(),
            $selectedDate->copy()->endOfWeek()->toDateString()
        ])->get();
    
        return view('reports.index', compact('reports', 'selectedWeek'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        // Create a new timesheet record in the database
        Report::create($data);

        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Report::findOrFail($id); // Find the report by ID
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Report::findOrFail($id); // Find the report by ID
        return view('reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the report by ID and update the record in the database
        $report = Report::findOrFail($id);
        $report->update($request->all());

        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}

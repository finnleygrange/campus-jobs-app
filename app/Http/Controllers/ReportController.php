<?php

namespace App\Http\Controllers;

use App\Models\report;
use App\Models\Tracker;
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
        // $selectedWeek = $request->input('week');
        // $selectedDate = Carbon::parse($selectedWeek)->startOfWeek();
    
        // $reports = Report::whereBetween('created_at', [
        //     $selectedDate->toDateString(),
        //     $selectedDate->copy()->endOfWeek()->toDateString()
        // ])->get();
    
        // return view('reports.index', compact('reports', 'selectedWeek'));

        // Retrieve reports based on the selected status filter
    $status = $request->input('status');

    // Apply filter conditions
    $query = Report::query();
    if ($status && $status != 'all') {
        $query->where('status', $status);
    }

    // Fetch reports
    $reports = $query->get();

    return view('reports.index', compact('reports'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // Create and save the report
        Report::create($data);

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Report submitted successfully!');
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



    public function approve(Report $report)
{
    // Update report status to approved
    $report->status = 'approved';
    $report->save();

    // Add data to master tracker
    Tracker::create([
        'report_id' => $report->id,
        // Add other necessary fields from the report
    ]);

    return redirect()->back()->with('success', 'Report approved successfully.');
}

public function close(Report $report)
{
    // Update report status to closed
    $report->status = 'closed';
    $report->save();

    // Add data to master tracker
    Tracker::create([
        'report_id' => $report->id,
        // Add other necessary fields from the report
    ]);

    return redirect()->back()->with('success', 'Report closed successfully.');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all(); // Retrieve all reports from the database
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
    }

    public function showTable(Request $request)
    {
      $date = $request->input('date');
      // Fetch data from the database based on the selected date
      $reports = Report::whereDate('created_at', $date)->get();
      return view('reports.show')->with('reports', $reports);
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
        $reports = Report::findOrFail($id); // Find the report by ID
        return view('reports.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reports = Report::findOrFail($id); // Find the report by ID
        return view('reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the report by ID and update the record in the database
        $reports = Report::findOrFail($id);
        $reports->update($request->all());

        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reports = Report::findOrFail($id);
        $reports->delete();

        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}

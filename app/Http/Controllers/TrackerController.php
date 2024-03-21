<?php

namespace App\Http\Controllers;

use App\Models\tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrackerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trackers.create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve visas that will expire within the next 30 days
        $trackers = Tracker::where('visa_end_date', '>=', Carbon::now())
                     ->orderBy('visa_end_date')
                     ->get();
    
        return view('trackers.index', compact('trackers'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'student_id' => 'required',
            'student_name' => 'required',
            'student_email_address' => 'required|email',
            'visa_end_date' => 'nullable',
            'manager_name' => 'required',
            'worked_hours' => 'required',
            'notes' => 'nullable',
        ]);
    
        // Create a new Tracker entry with the validated data
        Tracker::create($validatedData);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Tracker entry created successfully.');
    }
    




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tracker = Tracker::findOrFail($id); // Find the Tracker by ID
        return view('trackers.show', compact('tracker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tracker = Tracker::findOrFail($id); // Find the tracker by ID
        return view('trackers.edit', compact('tracker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the tracker by ID and update the record in the database
        $tracker = Tracker::findOrFail($id);
        $tracker->update($request->all());

        return redirect()->route('trackers.index')->with('success', 'Tracker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trackers = Tracker::findOrFail($id);
        $trackers->delete();

        return redirect()->route('trackers.index')->with('success', 'Tracker deleted successfully.');
    }
}

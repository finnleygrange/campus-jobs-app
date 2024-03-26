<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Student;
use App\Models\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracker = Tracker::all();

        return view('tracker.index', compact('tracker'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $managers = Manager::all();
        
        return view('tracker.create', compact('students', 'managers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        // Create a new student record in the database
        Tracker::create($data);

        return redirect()->route('tracker.index')->with('success', 'Tracker created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tracker = Tracker::findOrFail($id);
        
        return view('tracker.show', compact('tracker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tracker = Tracker::findOrFail($id);
        $students = Student::all();
        $managers = Manager::all();
        
        return view('tracker.edit', compact('tracker', 'students', 'managers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tracker = Tracker::findOrFail($id);

        $tracker->update($request->all());

        return redirect()->route('tracker.index')->with('success', 'Tracker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tracker = Tracker::findOrFail($id);

        $tracker->delete();

        return redirect()->route('tracker.index')->with('success', 'Tracker deleted successfully.');
    }
}

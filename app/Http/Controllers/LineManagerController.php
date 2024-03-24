<?php

namespace App\Http\Controllers;

use App\Models\LineManager;
use Illuminate\Http\Request;

class LineManagerController extends Controller
{
    function index() {

        $line_managers = LineManager::all();

        return view('line_managers.index', compact('line_managers'));
    }

    function create() {
        return view('line_managers.create');
    }

    function store(Request $request) {

        $data = $request->except('_token');

        // Create a new student record in the database
        LineManager::create($data);

        return redirect()->route('line-managers.index')->with('success', 'Line Line Manager created successfully.');
    }

    public function show(string $id)
    {
        $line_manager = LineManager::findOrFail($id); // Find the student by ID
        return view('line_managers.show', compact('line_manager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $line_manager = LineManager::findOrFail($id); // Find the student by ID
        return view('line_managers.edit', compact('line_manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Find the student by ID and update the record in the database
        $line_manager = LineManager::findOrFail($id);
        $line_manager->update($request->all());

        return redirect()->route('line-managers.index')->with('success', 'Line Manager updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $line_manager = LineManager::findOrFail($id);
        $line_manager->delete();

        return redirect()->route('line-managers.index')->with('success', 'Line Manager deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SchoolController extends Controller
{
    // Only one index method
    public function index(): View
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    public function create(): View
    {
        return view('schools.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'schoolRegistrationNumber' => 'required|string|max:255',
            'district' => 'required|string|max:255',
        ]);

        School::create($validated);

        return redirect()->route('schools.index');
    }

    public function show(School $school): View
    {
        return view('schools.show', compact('school'));
    }

    public function edit(School $school): View
    {
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request, School $school): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'schoolRegistrationNumber' => 'required|string|max:255',
            'district' => 'required|string|max:255',
        ]);

        $school->update($validated);

        return redirect()->route('schools.index')->with('flash_message', 'School created successfully!');

    }

    public function destroy(School $school): RedirectResponse
    {
        $school->delete();

        return redirect()->route('schools.index')->with('flash_message', 'School deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {
        $drivers = \App\Models\Driver::with('team')->orderBy('points', 'desc')->get();
        $teams = \App\Models\Team::withSum('drivers', 'points')
            ->orderBy('drivers_sum_points', 'desc')
            ->get();

        return view('welcome', compact('drivers', 'teams'));
    }  

    public function create(Request $request) {
        if ($request->user()->cannot('create', Driver::class)) {
            abort(403, 'Unauthorized.');
        }

        $teams = Team::all();
        return view('drivers.create', compact('teams'));
    }

    public function store(Request $request) {
        if ($request->user()->cannot('create', Driver::class)) {
            abort(403, 'Unauthorized.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string',
            'points' => 'required|integer',
            'team_id' => 'required|exists:teams,id',
        ]);
        
        Driver::create($validated);

        return redirect('/')->with('success', 'Driver added successfully!');
    }

    public function edit(Request $request, Driver $driver) {
        if ($request->user()->cannot('update', $driver)) {
            abort(403, 'Unauthorized.');
        }

        $teams = Team::all(); 
        return view('drivers.edit', compact('driver', 'teams'));
    }

    public function update(Request $request, Driver $driver) {
        if ($request->user()->cannot('update', $driver)) {
            abort(403, 'Unauthorized.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'points' => 'required|integer|min:0',
            'nationality' => 'required|string|max:255',
            'team_id' => 'required|exists:teams,id',
        ]);

        $driver->update($validated);

        return redirect('/')->with('success', 'Driver updated successfully!');
    }

    public function destroy(Request $request, Driver $driver) {
        if ($request->user()->cannot('delete', $driver)) {
            abort(403, 'Unauthorized.');
        }

        $driver->delete();
        return redirect('/')->with('success', 'Driver deleted!');
    }
}
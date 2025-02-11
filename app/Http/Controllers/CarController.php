<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'license_plate' => 'required',
            'price_per_day' => 'required|numeric',
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Motorcycle created successfully.');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'license_plate' => 'required',
            'price_per_day' => 'required|numeric',
        ]);

        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Motorcycle updated successfully.');
    }

    // app/Http/Controllers/CarController.php
public function destroy($id)
{
    $car = Car::find($id);
    
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Motorcycle deleted successfully.');
}

}

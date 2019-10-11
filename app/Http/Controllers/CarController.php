<?php

namespace App\Http\Controllers;
Use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function showCar(Car $car)
    {
        return Car::find($car);
    }

    public function storeCar(Request $request) {
        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    public function updateCar(Request $request, Car $car)
    {
        $car->update($request->all());
        return response()->json($car, 200);
    }

    public function deleteCar(Car $car)
    {
        $car->delete();

        return response()->json(NULL, 204);
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{


    public function index()
    {
        $car = Car::all();

        return view('cars.makecar', compact('car'));
    }


    // public function create()
    // {
    //     return view('cars/makecar');
    // }


 public function store(Request $request)
 {
    $car = new Car([

        'type' => $request->get('type'),
        'model' => $request->get('model'),
        'year' => $request->get('year')
]);


$car->save();

return redirect('')->with('success', 'Car made!');

}


}

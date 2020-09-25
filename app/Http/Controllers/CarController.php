<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{


 public function store(Request $request)
 {
    $car = new Car([

        'type' => $request->get('type'),

        'year' => $request->get('year'),

        'model' => $request->get('model')
]);


$car->save();

return redirect('/car')->with('success', 'Car made!');

}
}

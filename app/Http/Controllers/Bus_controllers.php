<?php

namespace App\Http\Controllers;
use App\Models\BusName;
use Illuminate\Http\Request;

class Bus_controllers extends Controller
{
    public function redirectToCreateBusPage(){
        return view('create_bus_name');
    }
    public function createBusName(Request $request){
      BusName::create([
        'bus_name' => $request->bus_name_input,
        'operation' => $request->operation_input
      ]);
      return redirect('/');
    }
}

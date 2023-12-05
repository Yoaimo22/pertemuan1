<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $a = "halo ini message dari backend dari controller.php";
        // $a = 0;
        return view('home', [
            "message" => $a
        ]);
    }
}

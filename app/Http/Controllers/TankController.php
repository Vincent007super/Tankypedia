<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;

class TankController extends Controller
{
    public function show(Tank $tank)
    {
        return view('tanks.show', compact('tank'));
    }
}

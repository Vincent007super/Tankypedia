<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'featuredTanks' => Tank::where('is_featured', true)->take(6)->get(),
            'latestTanks' => Tank::latest()->take(5)->get()
        ]);
    }
}

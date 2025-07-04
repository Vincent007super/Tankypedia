<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;

class CategoryController extends Controller
{
    public function show($category)
    {
        $tanks = Tank::where('category', $category)->get();

        return view('categories.show', [
            'category' => ucfirst(str_replace('-', ' ', $category)),
            'tanks' => $tanks,
        ]);
    }
}

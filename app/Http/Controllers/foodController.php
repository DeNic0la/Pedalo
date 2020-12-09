<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class foodController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function ShowFood()
    {
        $food = Food::inRandomOrder()->first()->Name;
        return view('show',['item' => $food ]);
        return view('showFood');
    }
    public function addItem(Request $request)
    {
        $data = $request->validate([
            'food' => 'required|unique:food,Name'
        ]);
        Food::create([
            'Name' => $data['food'],
        ]);
        return redirect('/add');
    }
}

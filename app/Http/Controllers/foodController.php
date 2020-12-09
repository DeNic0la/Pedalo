<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class foodController extends Controller
{
    public function add()
    {
        if (Auth::user()->activated >= 1){
            return view('add');
        }
        redirect('/');

    }
    public function ShowFood()
    {
        $food = Food::inRandomOrder()->first()->Name;
        return view('showFood',['item' => $food ]);
    }
    public function addItem(Request $request)
    {
        if (Auth::user()->activated < 1){
            redirect('/');
        }
        $data = $request->validate([
            'food' => 'required|unique:food,Name'
        ]);
        Food::create([
            'Name' => $data['food'],
        ]);
        return redirect('/add');
    }
}

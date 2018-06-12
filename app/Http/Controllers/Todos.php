<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class Todos extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('showTodo')->with('todos',$todos);
    }
}

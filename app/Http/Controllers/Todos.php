<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class Todos extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('ShowTodo')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        //creates the instace of the todo calss
        $todo = new Todo();
        //a particular row from todo database
        $todo->todo = $request->todo;
        //assign the todo in database
        $todo->save();

        //redirects to the original page
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;
use Session;
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
        Session::flash('success','Your todo is created');
        //a particular row from todo database
        $todo->todo = $request->todo;
        //assign the todo in database
        $todo->save();

        //redirects to the original page
        return redirect()->back();
    }
    public function delete($id){
        $todo = Todo::find($id);

        Session::flash('success','Your todo is deleted');
        $todo->delete();
        return redirect()->back();
    }
    public function update($id){
        $todo = Todo::find($id);
        Session::flash('success','Your todo is updated');
        return view('update')->with('todo',$todo);
    }
    public function save(Request $request,$id){
        $todo = Todo::find($id);
        $todo -> todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;

        Session::flash('success','Your todo is completed');
        $todo->save();
        return redirect()->back();
    }
}

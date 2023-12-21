<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller
{
    public function index(){
        $todos = Auth::user()->todos;

        return view('todos.index', ['todos' => $todos]);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        $user = Auth::user(); // Get the currently authenticated user

        Todo::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_complete' => 0,
            'user_id' => $user->id,
        ]);

        return redirect()->route('todos.index')->with('success-alert', 'Task created successfully');
    }

    public function detail($id){
        
        $todos = Todo::find($id);
        if (!$todos) {
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Task not available'
            ])->with('error', 'Task not available');
        }

        return view('todos.detail', ['todo' => $todos]);
    }

    public function edit($id){

        $todos = Todo::find($id);
        if (!$todos) {
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Task not available'
            ])->with('error', 'Task not available');
        }

        return view('todos.edit', ['todo' => $todos]);
    }

    public function update(Request $request)
    {
        $todo = Todo::find($request->todo_id);

        if (!$todo) {
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Task not available'
            ])->with('error', 'Task not available');
        }

        $user = Auth::user();

        $todo->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => $user->id,
        ]);

        return redirect()->route('todos.index')->with('success', 'Task updated successfully');
    }

    public function remove(Request $request)
    {
        $todo = Todo::find($request->todo_id);

        if (!$todo) {
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Task not available'
            ])->with('error', 'Task not available');
        }

        $todo->delete();

        return redirect()->route('todos.index')->with('delete-alert', 'Task deleted successfully');
    }

    public function toggleStatus($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Task not available'
            ])->with('error', 'Task not available');
        }

        $todo->update([
            'is_complete' => !$todo->is_complete,
        ]);

        return redirect()->route('todos.index')->with('success', 'Task status updated successfully');
    }

    public function showProfile()
{
    // Assuming $todos is your list of tasks
    $todos = Todo::all(); // Replace Todo with your actual model

    return view('profile', ['todos' => $todos]);
}
    
}
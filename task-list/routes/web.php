<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');

});

// to make external call you need use($variable) after annynomous function
Route::get('/tasks', function () {
    return view('index',[
        // 'tasks'=>App\Models\Task::all()
        'tasks'=>App\Models\Task::latest()->get()
        // 'tasks'=>App\Models\Task::latest()->where('completed',true)->get()
    ]);
})->name('tasks.index');

// this is the route for every task
Route::get('/tasks/{id}',function($id){
    // App\Models\Task::find($id);

    return view('show',[
        // 'task'=>App\Models\Task::find($id)]);
        'task'=>App\Models\Task::findOrFail($id)]);
    })->name('tasks.show');

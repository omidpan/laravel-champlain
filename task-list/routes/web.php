<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');

});

// to make external call you need use($variable) after annynomous function
Route::get('/tasks', function () {
    return view('index',[

        'tasks'=>App\Models\Task::latest()->get()

    ]);
})->name('tasks.index');
// Don't forget the order of routes ar important when path is the same
Route::view('/tasks/create','create');

Route::get('/tasks/{id}',function($id){


    return view('show',[

        'task'=>App\Models\Task::findOrFail($id)]);
    })->name('tasks.show');


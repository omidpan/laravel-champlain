<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
Route::get('/', function () {
    return redirect()->route('tasks.index');

});

// to make external call you need use($variable) after annynomous function
Route::get('/tasks', function () {
    return view('index',[
        //import Task from model with use keyboard on the top of the Route file.
        'tasks'=>Task::latest()->get()

    ]);
})->name('tasks.index');
// Don't forget the order of routes ar important when path is the same
Route::view('/tasks/create','create')->name('tasks.create');

Route::get('/tasks/{id}',function($id){


    return view('show',[

        'task'=>Task::findOrFail($id)]);
    })->name('tasks.show');

Route::post('/tasks',function(Request $request){
 //add validation forms
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required'
    ]);
 //create a model and object
    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    // Laravel model is smart enough to save data in the database with save() method.
    $task->save();
// let's redirect to the already created task
    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.store');

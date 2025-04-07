<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
Route::get('/', function () {
    return redirect()->route('tasks.index');

});

Route::get('/tasks', function () {
    return view('index',['tasks'=>Task::latest()->get()]);
})->name('tasks.index');


Route::view('/tasks/create','create')->name('tasks.create');

Route::get('/tasks/{task}/edit',function(Task $task) {
    return view('eidt',['task'=> $task]);
    })->name('tasks.edit');

Route::get('/tasks/{task}',function(Task $task) {
    return view('show',['task'=>$task]);
    })->name('tasks.show');

Route::get('/tasks/{task}/edit',function(Task $task) {
        return view('edit',['task'=> $task]);
        })->name('tasks.edit');

Route::post('/tasks',function(TaskRequest $request){
    //with using taskRequest validated() method
    $data = $request->validated();
    $task = Task::create($data);
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success','Task created successfully');
})->name('tasks.store');


//Update form
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
   $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' => $task->id])
        ->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::delete('/tasks/{task}',function(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Task deleted successfully');
})->name('tasks.destroy');

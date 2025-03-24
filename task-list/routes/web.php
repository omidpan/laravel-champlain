<?php

use Illuminate\Support\Facades\Route;

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2025-03-01 12:00:00',
    '2025-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2025-03-02 12:00:00',
    '2025-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2025-03-03 12:00:00',
    '2025-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2025-03-04 12:00:00',
    '2025-03-04 12:00:00'
  ),
];
Route::get('/', function () {
    return redirect()->route('tasks.index');

});

// to make external call you need use($variable) after annynomous function
Route::get('/tasks', function () use ($tasks) {
    return view('index',[
        'tasks'=>$tasks
    ]);
})->name('tasks.index');

// this is the route for every task
Route::get('/{id}',function($id)use($tasks){

    // arrays are not objects in php like ArrayList in Java , so we use collect to make use of collection in php
    $task=collect($tasks)->firstWhere('id',$id);
    if(!$task){
    abort(Response::HTTP_NOT_FOUND);
    }
    return view('show',[
        'task'=>$task
        ]);
    })->name('tasks.show');

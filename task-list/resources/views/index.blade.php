<h1>The list of tasks: </h1>

<div>
@forelse ($tasks as $task)
    <li>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{$task->title}}
    </li>
@empty
  <div> Tasks list is empty</div>
@endforelse

</div>

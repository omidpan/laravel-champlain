<h1>The list of tasks: </h1>

<div>
@forelse ($tasks as $task)
    <li>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}
    </li>
@empty
  <div> Tasks list is empty</div>
@endforelse

</div>



{{-- @isset($name)
    <div>
        My Name is : {{$name}}
    </div>
@endisset --}}


{{-- <div>
    @if (count($tasks))
    <h2> Title</h2>
    @foreach ($tasks as $task)
        <div>{{$task->title}}</div>
    @endforeach
    <div> There are tasks!</div>
    @else
    <div> No tasks!</div>
    @endif
</div> --}}

{{-- <h1>The list of tasks: </h1>

<div>
@forelse ($tasks as $task)
    <li>{{$task->title}}</li>
@empty
  <div> Tasks list is empty</div>
@endforelse

</div> --}}

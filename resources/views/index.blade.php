@extends('layouts.app')

@section('title', 'The list of tasks')



@section('content')
{{-- @if(count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
        <div>No tasks found</div>
    @endforelse
    {{-- @endif --}} 

    @if($tasks->count())
        <div>
            {{ $tasks->links() }}
        </div>
    @endif
@endsection
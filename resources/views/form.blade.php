@extends('layouts.app')

@section ('title', isset($task) ? 'Edit Task' : 'Create Task')

@section('styles')
    <style>
        .error-msg {
            color: red;
            font-size: 0, .8rem
        }
    </style>
@endsection

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="post">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="long_description">Long description</label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">
            @isset($task)
                Edit Task
            @else
                Create Task
            @endisset
        </button>
    </form>
@endsection
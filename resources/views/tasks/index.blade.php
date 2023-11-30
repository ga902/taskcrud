<!-- resources/views/tasks/index.blade.php -->
@extends('layout.header')

@section('content')
    <h1>Task List</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @foreach($tasks as $task)
        <div>
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->description }}</p>
            <p>Deadline: {{ $task->deadline }}</p>
            <p>Status: {{ $task->status }}</p>
            <a href="{{ route('task.show', $task->id) }}">View</a>
            <a href="{{ route('task.edit', $task->id) }}">Edit</a>
            <form method="post" action="{{ route('task.delete', $task->id) }}">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

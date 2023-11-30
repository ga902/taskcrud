<!-- resources/views/tasks/edit.blade.php -->
@extends('layout.header')

@section('content')
    <h1>Edit Task</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="post" action="{{ route('task.update', $task->id) }}">
        @csrf
        @method('put')
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label for="description">Description</label>
        <textarea name="description" required>{{ $task->description }}</textarea>

        <label for="deadline">Deadline</label>
        <input type="date" name="deadline" value="{{ $task->deadline }}" required>

        <label for="status">Status</label>
        <input type="text" name="status" value="{{ $task->status }}" required>

        <button type="submit">Update Task</button>
    </form>
   

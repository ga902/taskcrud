<!-- resources/views/tasks/create.blade.php -->
@extends('layout.header')
    <h1>Create Task</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="post" action="{{ route('task.create') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label for="description">Description</label>
        <textarea name="description" required>{{ old('description') }}</textarea>

        <label for="deadline">Deadline</label>
        <input type="date" name="deadline" value="{{ old('deadline') }}" required>

        <label for="status">Status</label>
        <input type="text" name="status" value="{{ old('status') }}" required>

        <!-- Assuming you have a logged-in user -->
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <button type="submit">Create Task</button>
    </form>

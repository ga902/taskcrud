<!-- resources/views/tasks/show.blade.php -->
@extends('layout.header')

    <h1>Task Details</h1>
    <p>Title: {{ $task->title }}</p>
    <p>Description: {{ $task->description }}</p>
    <p>Deadline: {{ $task->deadline }}</p>
    <p>Status: {{ $task->status }}</p>
    <a href="{{ route('task.list') }}">Back to Task List</a>

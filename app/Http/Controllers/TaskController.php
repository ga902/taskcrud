<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
            'status' => 'required',
        ]);

        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => $request->input('deadline'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('user.index')->with('message', 'Task created successfully');
    }

    public function showTaskList()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function showTask($id)
    {
        $task = Task::find($id);

        return view('tasks.show', ['task' => $task]);
    }

    public function editTask($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }
    public function showCreateForm()
    {
        return view('tasks.create');
    }


    public function updateTask(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
            'status' => 'required',
        ]);

        $task = Task::find($id);
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => $request->input('deadline'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('user.index')->with('message', 'Task updated successfully');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.list')->with('message', 'Task deleted successfully');
    }
}

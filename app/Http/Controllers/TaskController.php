<?php

namespace App\Http\Controllers;


use App\Http\Requests\createTaskRequest;
use App\Task;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Request;

class TaskController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks'=>$tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(createTaskRequest $request)
    {

        $task = new Task;
        $task->fill($request->all());
        $task->save();

        return redirect()->route('task.index');
    }
    public function view($id)
    {
        $task = Task::find($id);
        return view('tasks.view', ['task'=>$task]);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task'=>$task]);
    }

    public function update(createTaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();
        return redirect()->route('task.index');
    }
}

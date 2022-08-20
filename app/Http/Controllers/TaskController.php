<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(TaskRequest $request)
    {   
        Task::create($request->all());

        return back(); //redirect()->back();
    }

    public function edit(Task $task)
    {
        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        // Task::where('id', $id)->update([
        //     'list' => $request->list,
        // ]);

        Task::find($id)->update([
            'list' => $request->list,
        ]);

        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        
        return back();
    }
}

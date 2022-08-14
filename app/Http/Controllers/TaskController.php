<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            'list' => $request->list,
        ]);

        return back(); //redirect()->back();
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'list' => $request->list,
        ]);

        return redirect('tasks');
    }

    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        
        return back();
    }
}

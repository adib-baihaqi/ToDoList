<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('id','DESC')
        ->get();

        return view('index',[
            'tasks'=>$tasks,    
        ]);
    }

    public function create(){
        return view('list');
    }

    public function store(){
        Task::create([
            'description' =>request('description',)
        ]);
        return redirect('/');
    }

    public function update($id){
        $task = Task::where('id',$id)->first();

        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }
}

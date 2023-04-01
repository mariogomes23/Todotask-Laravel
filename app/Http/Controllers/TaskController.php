<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;

    }
    //========================================

    public function index()
    {
        $tasks = $this->task->paginate();

        return View("index",["tasks"=>$tasks]);

    }
     //========================================
    public function create()
    {
        $tasks = $this->task->all();

        return View("create",["tasks"=>$tasks]);


    }
     //========================================
    public function edit($id)
    {
        $tasks = $this->task->findOrFail($id);

        return View("edit",["tasks"=>$tasks]);

    }
     //========================================
    public function show($id)
    {

        $tasks = $this->task->findOrFail($id);

        return View("show",["tasks"=>$tasks]);
    }
    //=========================================
    public function store(TaskCreateRequest $request)
    {

        $tasks = $this->task->create([
            "title"=>$request->title,
            "progress"=>$request->progress,
            "status"=>$request->status,
            "description"=>$request->description
        ]);

        return  redirect()->route("tasks.index")->with("message","create with success");
    }
     //========================================
    public function update(TaskUpdateRequest $request,$id)
    {

        $tasks = $this->task->findOrFail($id);
        $tasks->update([
            "title"=>$request->title,
            "progress"=>$request->progress,
            "status"=>$request->status,
            "description"=>$request->description
        ]);

        return  redirect()->route("tasks.index")->with("message","updated with success");


    }
     //========================================
    public function destroy($id)
    {
        $tasks = $this->task->findOrFail($id);
        $tasks->delete();
        return  redirect()->route("tasks.index")->with("message","deleted with success");

    }
     //========================================


    
}



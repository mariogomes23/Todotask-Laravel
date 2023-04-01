<?php

namespace App\Http\Controllers;

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

    }
     //========================================
    public function create()
    {

    }
     //========================================
    public function edit()
    {

    }
     //========================================
    public function show()
    {

    }
     //========================================
    public function update()
    {

    }
     //========================================
    public function destroy()
    {

    }
     //========================================
}

<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::resource("tasks",TaskController::class,[
    'names' => [
        'index' => 'index',
        'store' => 'store',
        'update' => 'update',
        'destroy' => 'destroy',
        'create' => 'create',
        'edit' => 'edit',
        'show'=>'show'
    ]
]);


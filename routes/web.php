<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// View
Route::get('/', [StudentsController::class, 'myView'])->name('std.myView');

// Create
Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');
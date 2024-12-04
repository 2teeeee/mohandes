<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
})->name("home");

Route::get("/login", [UserController::class, 'login'])->name("login");
Route::post("/login", [UserController::class, 'authenticate'])->name("authenticate");

Route::get("/register", [UserController::class, 'register'])->name("register");
Route::post("/register", [UserController::class, 'userDefine'])->name("userDefine");

Route::get("/evaluation", [EvaluationController::class, 'register'])->name("evaluation");
Route::post("/evaluation", [EvaluationController::class, 'evaluationDefine'])->name("evaluationDefine");

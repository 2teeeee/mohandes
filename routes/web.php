<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\KhataratController;
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

Route::get("/khatarat/list", [KhataratController::class, 'list'])->name("khatarats");
Route::get("/khatarat/create", [KhataratController::class, 'create'])->name("khataratCreate");
Route::post("/khatarat/create", [KhataratController::class, 'save'])->name("khataratDefine");

Route::get("/education/list", [EducationController::class, 'list'])->name("educations");
Route::get("/education/create", [EducationController::class, 'create'])->name("educationCreate");
Route::post("/education/create", [EducationController::class, 'save'])->name("educationDefine");

Route::get("/equipment/list", [EquipmentController::class, 'list'])->name("equipments");
Route::get("/equipment/create", [EquipmentController::class, 'create'])->name("equipmentCreate");
Route::post("/equipment/create", [EquipmentController::class, 'save'])->name("equipmentDefine");

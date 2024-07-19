<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\GYMController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\NutritionistController;

Route::get('/', [StaticController::class,'index'])->name("home.index");
Route::get('/signin', [StaticController::class,'signin'])->name("home.signin");
Route::get('/about', [StaticController::class,'about'])->name("home.about");
Route::get('/contact', [StaticController::class,'contact'])->name("home.contact");
Route::get('/gyms/register', [GYMController::class,'gymregister'])->name("gyms.register");
Route::get('/gyms/payment', [GYMController::class,'payment'])->name("gyms.payment");
Route::get('/gyms/comlpete_register', [GYMController::class,'comlpete_register'])->name("gyms.comlpete_register");
Route::post('/gyms/checkCredentials', [GYMController::class,'checkCredentials'])->name("gyms.checkCredentials");
Route::get('/gyms/gym_profile', [GYMController::class,'gym_profile'])->name("gyms.gym_profile");


Route::resource('gyms',GYMController::class);
Route::get('/members/requests', [MemberController::class,'requests'])->name("members.requests");
Route::resource('members',MemberController::class);

Route::get('/coaches/requests', [CoachController::class,'requests'])->name("coaches.requests");
Route::resource('coaches',CoachController::class);

Route::get('/nuts/requests', [NutritionistController::class,'requests'])->name("nuts.requests");
Route::resource('nuts',NutritionistController::class);


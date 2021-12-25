<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\QuestionController;

Route::redirect('/', "/doctor");

Route::get("/login",[LoginController::class , 'show'])->name("login");

Route::get("/register",[RegisterController::class , 'show']);

Route::post("/log",[LoginController::class , 'authenticate']);

Route::post("/reg",[RegisterController::class , 'store']);

Route::get('/survey/{survey}', [SurveyController::class , 'ShowForGuest']);
Route::get('/thanks', [SurveyController::class , 'ThanksPage']);


Route::post('/survey/finish/{id}' , [SurveyController::class , 'FinishSurvey']);

Route::middleware(['auth'])->group(function () {
    
Route::view('/doctor', 'doctor.layouts.profile');

Route::get("/doctor/surveys" ,[SurveyController::class , 'index']);
Route::get("/doctor/survey/create",[SurveyController::class , 'create']);
Route::get("/doctor/survey/{survey}",[SurveyController::class , 'show'])->where(['survey'=> '^[0-9]+$']);
Route::post("/doctor/survey/store" , [SurveyController::class , 'store']);
Route::get("/doctor/survey/{survey}/question/create" , [QuestionController::class , 'create'])->where(['survey'=> '^[0-9]+$']);
Route::post("/doctor/survey/{survey}/question/store" , [QuestionController::class , 'store'])->where(['survey'=> '^[0-9]+$']);
Route::get("/logout" , function(){

    Auth::logout();

    return redirect("/");

});

});
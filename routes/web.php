<?php

use Illuminate\Support\Facades\Route;


//********************************* Admin Controller *********************************
use App\Http\Controllers\admin\adminDashboardController;
use App\Http\Controllers\admin\adminloginController;
use App\Http\Controllers\admin\adminTemplatesController;



//********************************* User Admin Controller *********************************
use App\Http\Controllers\user_admin\userDashboardController;
use App\Http\Controllers\user_admin\userAuthController;



//********************************* Admin Routes *********************************
//Route::get('admin/templates-edit',[adminTemplatesController::class,'adminTemplatesEditView']);
Route::post('admin/templates-edit/{id}',[adminTemplatesController::class,'adminTemplatesEditAction']);
Route::get('admin/templates-edit/{id}',[adminTemplatesController::class,'adminTemplatesEditView']);
Route::post('admin/templates-add',[adminTemplatesController::class,'adminTemplatesAddAction']);
Route::get('admin/templates-add',[adminTemplatesController::class,'adminTemplatesAddView']);
Route::get('admin/templates',[adminTemplatesController::class,'adminTemplatesView']);
Route::get('admin/dashboard',[adminDashboardController::class,'adminDashboardView']);
Route::get('admin/login',[adminloginController::class,'adminLoginView']);
Route::post('admin/adminLogin',[adminloginController::class,'adminLogin']);
Route::get('admin/adminLogout',[adminloginController::class,'adminLogout']);




//********************************* User Admin Routes *********************************
Route::get('user-admin/dashboard',[userDashboardController::class,'userDashboardView']);
Route::get('user-admin/login',[userAuthController::class,'userLoginView']);
Route::post('user-admin/login',[userAuthController::class,'userLogin']);
Route::get('user-admin/adminLogout',[userAuthController::class,'adminLogout']);
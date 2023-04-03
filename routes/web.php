<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\DeleteContactController;
use App\Http\Controllers\updateRecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/contact', [contactController::class, 'contact']);

Route::post('/contact', [contactController::class, 'savedata']);

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/view', function () {
    $users = DB::table('contact')->select('id','name','email','subject','message')->get();
    return view('viewcontact', compact('users'));
});
Route::get('/delete-records', [DeleteContactController::class, 'index']);
Route::get('delete/{id}', [DeleteContactController::class, 'destroy']);




Route::get('edit-records',[updateRecordController::class, 'index']);
Route::get('edit/{id}',[updateRecordController::class, 'show']);
Route::post('edit/{id}',[updateRecordController::class, 'edit']);
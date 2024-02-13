<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\newcontroller;
use App\Http\Controllers\subcontroller;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('/anasayfa');
});



Route::post('/store',[newcontroller::class,'store'])->name('newcontroller.store');

Route::get('/flag', function () {
    return "still working on it";
})->name('flag');


Route::get('/anasayfa', function () {
    return view('/anasayfa');
})->name('anasayfa');



Route::post('/store1',[subcontroller::class,'store1'])->name('subcontroller.store');

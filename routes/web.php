<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\newcontroller;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('/anasayfa');
});



Route::post('/store',[newcontroller::class,'store'])->name('newcontroller.store');



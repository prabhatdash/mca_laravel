<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members/display', [App\Http\Controllers\MemberController::class, 'display'])->name('members.display');
Route::post('/members', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store');
Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'display'])->name('members.create');
Route::get('/members/display_all', [App\Http\Controllers\MemberController::class, 'display_all'])->name('members.display_all');
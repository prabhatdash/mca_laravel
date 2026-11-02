<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members/display', [App\Http\Controllers\MemberController::class, 'display'])->name('members.display');
Route::post('/members', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store');
Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'display'])->name('members.create');
Route::get('/members/display_all', [App\Http\Controllers\MemberController::class, 'display_all'])->name('members.display_all');
Route::get('/members/{id}/delete', [App\Http\Controllers\MemberController::class, 'delete'])->name('members.delete');
Route::get('/members/{id}/edit', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit');
Route::put('/members/{id}/update', [App\Http\Controllers\MemberController::class, 'update'])->name('members.update');
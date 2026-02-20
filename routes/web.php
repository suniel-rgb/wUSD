<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/earn', [PageController::class, 'earn'])->name('earn');
Route::get('/transparency', [PageController::class, 'transparency'])->name('transparency');
Route::get('/developers', [PageController::class, 'developers'])->name('developers');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/whitepaper', [PageController::class, 'whitepaper'])->name('whitepaper');
Route::get('/legal/terms', [PageController::class, 'terms'])->name('legal.terms');
Route::get('/legal/privacy', [PageController::class, 'privacy'])->name('legal.privacy');
Route::get('/legal/risk', [PageController::class, 'risk'])->name('legal.risk');

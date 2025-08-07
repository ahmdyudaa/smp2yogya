<?php

use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $news = News::latest()->take(3)->get();
    return view('home', compact('news'));
})->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/vision-mission', function () {
    return view('vision-mission');
})->name('vision-mission');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/organization', function () {
    return view('organization');
})->name('organization');

Route::get('/academics', function () {
    return view('academics');
})->name('academics');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/facilities', function () {
    return view('facilities');
})->name('facilities');

Route::get('/achievements', function () {
    return view('achievements');
})->name('achievements');

Route::get('/admissions', function () {
    return view('admissions');
})->name('admissions');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/downloads', function () {
    return view('downloads');
})->name('downloads');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
?>
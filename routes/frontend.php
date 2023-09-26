<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\FrontenhomeController;

Route::get('/', function () {
    return view('frontend.homepage');
});

Route::middleware('auth')->prefix("/frontend")->controller(PostController::class)->name('forntpost.')->group(function(){
    Route::get('/post', 'allPost')->name('all');
    Route::get('/appliedforjob/{id}', 'appliedjobpost')->name('appliedjobpost');
    Route::post('/appliedjobs/', 'appliedjob')->name('appliedjob');
    Route::middleware('role:user')->get('/jobLike/{id}','jobLike')->name('jobLike');
    Route::middleware('role:user')->get('/disLike/{id}','disLike')->name('disLike');

});

Route::get('/', [FrontenhomeController::class, 'home'])->name('home');
?>
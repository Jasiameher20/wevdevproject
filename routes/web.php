<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SubCategoryController;

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

Route::get('/', function () {
    return view('frontend.homepage');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::prefix("/admin/")->group(function(){



Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::put('/profile/password-update', [HomeController::class, 'passwordUpdate'])->name('profile.password.update');

Route::put('/profile/user-info', [HomeController::class, 'profileUpdate'])->name('profile.user');


/**
 * CATEGORY ROUTES
 */
Route::prefix("/categories")->controller(categoryController::class)->name('category.')->group(function(){
    
    Route::get('/', 'getAllCategories')->name('all');
    Route::post('/store', 'storeCategory')->name('store');
    Route::get('/edit/{slug}',"editCategory")->name('edit');
    Route::post('/update/{slug}',"updateCategory")->name('update');
    Route::delete('/delete/{id}',"deleteCategory")->name('delete');
});
 
 /**
 * SUB-CATEGORY ROUTES
 */
Route::prefix('/sub-categories/')->controller(SubCategoryController::class)->name('subcategories.')->group(function(){
    
    Route::get('/', 'getAllSubCategory')->name('all');
    Route::post('/store', 'storeSubCategory')->name('store');
});

    /**
     * * POSTS ROUTES
     */

     
//Route::get('/posts', [PostController::class, 'getallPosts'])->name('post.all');
        
 
Route::prefix('/posts/')->controller(PostController::class)->name('posts.')->group(function () {
    Route::get('/', 'addPosts')->name('add');
    Route::get('/getallPosts', 'getallPosts')->name('all');
    Route::get('/postDetail/{id}', 'postDetail')->name('detail');
    Route::get('/postEdit/{id}', 'postEdit')->name('edit');
    Route::post('/postUpdate/{id}', 'postUpdate')->name('update');
    Route::post('/store', 'storePosts')->name('store');

    //Route::get('/edit/{slug}',"editPost")->name('edit');
    // Route::get('/test', 'testPost')->name('test');
  
});     
    

});
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



Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isBan'])->prefix("/admin/")->group(function(){


Route::get('/get-users', [HomeController::class, 'getAllUser'])->name('all.users');
Route::get('/ban-users/{id}', [HomeController::class, 'banUser'])->name('ban.users');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::put('/profile/password-update', [HomeController::class, 'passwordUpdate'])->name('profile.password.update');

Route::put('/profile/user-info', [HomeController::class, 'profileUpdate'])->name('profile.user');


/**
 * CATEGORY ROUTES
 */
Route::middleware('role:admin|employer')->prefix("/categories")->controller(categoryController::class)->name('category.')->group(function(){
    
    Route::get('/', 'getAllCategories')->name('all');
    Route::post('/store', 'storeCategory')->name('store');
    Route::get('/edit/{slug}',"editCategory")->name('edit');
    Route::post('/update/{slug}',"updateCategory")->name('update');
    Route::delete('/delete/{id}',"deleteCategory")->name('delete');
});
 
 /**
 * SUB-CATEGORY ROUTES
 */
Route::middleware('role:admin|employer')->prefix('/sub-categories/')->controller(SubCategoryController::class)->name('subcategories.')->group(function(){
    
    Route::get('/', 'getAllSubCategory')->name('all');
    Route::post('/store', 'storeSubCategory')->name('store');
});

    /**
     * * POSTS ROUTES
     */

     
//Route::get('/posts', [PostController::class, 'getallPosts'])->name('post.all');
        
 
Route::prefix('/posts/')->controller(PostController::class)->name('posts.')->group(function () {
    Route::middleware(["role:employer|admin"])->get('/', 'addPosts')->name('add');
    Route::middleware(["role:employer|admin"])->get('/getallPosts', 'getallPosts')->name('all');
    Route::get('/postDetail/{id}', 'postDetail')->name('detail');
    Route::middleware(["role:employer|admin"])->get('/postEdit/{id}', 'postEdit')->name('edit');
    Route::middleware(["role:employer|admin"])->post('/postUpdate/{id}', 'postUpdate')->name('update');
    Route::post('/store', 'storePosts')->name('store');

    //Route::get('/edit/{slug}',"editPost")->name('edit');
    // Route::get('/test', 'testPost')->name('test');
  
});     
    

});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgetController;
use App\Models\category;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
Route::get('/contact', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/contact', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/setting', [userController::class,'update']);
Route::get('/setting', [categoryController::class,'setting']);
Route::get('/settings/mob', [categoryController::class,'settingMob']);
Route::get('/mob', [CatController::class,'mob']);
Route::get('/forget', [ForgetController::class,'forget']);
Route::get('/reset/password/{id}', [ForgetController::class,'repassword']);
Route::post('/reset/password/{id}', [ForgetController::class,'repass']);
Route::post('/forget', [ForgetController::class,'reset']);
Route::get('/verification/{email}', [userController::class,'verify']);

Route::get('/mis', [CatController::class,'mis']);
Route::get('/ser', [CatController::class,'ser']);
Route::get('/job', [CatController::class,'job']);
Route::get('/car', [CatController::class,'car']);
Route::get('/', [categoryController::class,'Home']);
Route::get('/mob', [categoryController::class,'Homemob']);
Route::get('/co/mob/{cat?}', [categoryController::class,'categoryMob']);
Route::get('/su/mob/{sub?}', [categoryController::class,'subcategoryMob']);
Route::get('/dashboard', function ()
{
  return redirect('/');
});
Route::get('/privacy', function ()
{
  return redirect('/privacy-policy');
});

Route::get('/logmob', function ()
{
     session(['mob'=>'yes']);
     if(Session::has('userData')){
         return redirect('/post/show');
     }
  return redirect('/login');
});
Route::get('/showmob', function ()
{
     session(['mob'=>'yes']);
  return redirect('/post/show');
});
Route::get('/aboutmob', function ()
{
     session(['mob'=>'yes']);
  return redirect('/about');
});
Route::get('/privacymob', function ()
{
     session(['mob'=>'yes']);
  return redirect('/privacy');
});
Route::get('/admin', function ()
{
  return redirect('/admin/login');
});
Route::get('/theam', function ()
{
    if(session('col')=="grey"){
         session()->forget(['col']);}
     if(session('col')=="white"){
     session(['col'=>"grey"]);}
  return redirect('/mob');
    
});
Route::get('/admin/login', [adminController::class,'home']);
Route::post('/admin/login', [adminController::class,'Login']);
Route::get('admin/dashboard', [adminController::class,'dashboard']);
Route::get('/admin/logout', [adminController::class,'logout']);
Route::get('/auth/logout', [userController::class,'Logout']);
Route::post('/auth/login', [userController::class,'login']);
Route::get('/post/show',[postController::class,'show']);
Route::get('/post/create',[postController::class,'create']);
Route::post('/registeration', [userController::class,'store']);
Route::post('/post/create', [postController::class,'store']);
Route::get('/layout', [postController::class,'search']);
Route::get('/post/{id}/edit', [postController::class,'edit']);
Route::get('admin/post/{id}/edit', [postController::class,'adminEdit']);
Route::post('admin/post/{id}/edit', [postController::class,'adminUpdate']);
Route::post('/post/{id}/edit', [postController::class,'update']);
Route::get('/post/{id}/ad', [postController::class,'ads']);
Route::get('/post/{id}/delete', [postController::class,'destroy']);
Route::get('/registeration', [userController::class,'register']);
Route::get('/about', [categoryController::class,'Hom']);
Route::get('/disclaimer', [categoryController::class,'contact']);

Route::get('/privacy-policy', [categoryController::class,'privacy']);
Route::get('/blog', [categoryController::class,'blog']);
Route::get('/con/{cat?}', [categoryController::class,'category']);
Route::get('/test/{cat}', [categoryController::class,'category']);
Route::get('/sub/{sub?}', [categoryController::class,'subcategory']);
//Route::resource('/post/{conn?}/{subcat?}', postController::class);
Route::get('/post/{conn?}/{subcat?}', [postController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

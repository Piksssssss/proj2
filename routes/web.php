<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;




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
    return view('welcome');
});

Route::get('beranda',function(){
    return view('beranda');
})->middleware('auth:member');
    Route::get('login/member',[AuthController::class,'login']);
    Route::post('login/member',[AuthController::class,'auth']);
    Route::get('register/member',[MemberController::class,'register']);
    Route::post('register/member',[MemberController::class,'create']);
    Route::get('logout/member',[AuthController::class,'logout_member']);

    Route::get('product',function(){
        return view('product');
    })->middleware('auth:web');
Route::get('login/admin',[AuthController::class,'login_admin']);
Route::post('login/admin',[AuthController::class,'auth']);
Route::get('register/admin',[AdminController::class,'register']);
Route::post('register/admin',[AdminController::class,'create']);
Route::get('logout/admin',[AuthController::class,'logout_admin']);


Route::get('beranda',[ShoesController::class,'show']);
Route::get('product/detail/{id}',[ShoesController::class,'detail']);


Route::get('product',[ProductController::class,'show']);
Route::get('product/add',[ProductController::class,'add']);
Route::post('product/create',[ProductController::class,'create']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);
Route::get('product/hapus/{id}',[ProductController::class,'hapus']);

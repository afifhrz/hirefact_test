<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if(session()->has('email')){
        return view('app');
    } else {
        return redirect('/login');
    }
});

Route::group(['middleware' => ['file.upload']], function () {
    Route::post('user',[UserAuth::class, 'userLogin']);
});
Route::post('createUser',[UserAuth::class, 'createUser']);

Route::get('/login',function(){
    if(session()->has('email')){
        return redirect('/');
    } else {
        return view('login');
    }
});

Route::get('/logout',function(){
    if(session()->has('email')){
        session()->pull('email');
    }
    return redirect('/login');
});

Route::get('/register', function () {
    if(session()->has('email')){
        return redirect('/');
    } else {
        return view('register');
    }
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
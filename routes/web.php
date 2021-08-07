<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

//お問い合わせ入力ページ
Route::get('/', [ContactController::class, 'index'])
    ->name('contacts.index');

// 確認ページ
Route::post('/confirm', 'ContactController@confirm')
    ->name('contacts.confirm');

//DB挿入
Route::post('/create', 'ContactController@create')
    ->name('contacts.create');

Route::get('/create', [ContactController::class, 'create'])
    ->name('contacts.create');
// Route::get('/complete', [ContactController::class, 'create'])
//     ->name('contacts.create');

// 完了ページ
// Route::post('/complete', 'ContactController@complete')
// ->name('contacts.complete');

Route::get('/complete', [ContactController::class, 'complete'])
    ->name('contacts.complete');



//管理画面
Route::get('/management', [ContactController::class, 'management'])
    ->name('contact.management');


// Route::get('/hello/add', 'HelloController@add');
// Route::post('/hello/result', 'HelloController@result');
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    $data = [
        'name' => 'yc',
        'email' => 'yc@163.com',
        'email_verified_at' => now(),
        'password' => '123456',
    ];
   $user = \App\Models\User::query()->create($data);
   dd($user);
});

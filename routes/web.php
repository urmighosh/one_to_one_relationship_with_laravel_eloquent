<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\UserPhone;

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

     $users = User::find(1);

// $userphone = User::find(1)-> user_phones;[id,phone number dekha jai ]


    $userphone = User::all();
    return $userphone;
    // [sob data dekha jabe]

    return view('welcome');
});

<?php

use App\Models\User;
use App\Models\User2;
use App\Models\User3;
use Illuminate\Support\Facades\DB;
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

    // $user = User::all();
    // return $user ;

    // $user2 = User2::all();
    // return $user2 ;

    // $user3 = User3::all();
    // return $user3 ;

    // *****************************************************


    // $user = DB::table('users')->get();
    // return $user ;

    // $user2 = DB::connection('mysql2')->table('user2s')->get();
    // return $user2 ;

    // $user3 = DB::connection('mysql3')->table('user3s')->get();
    // return $user3 ;

});

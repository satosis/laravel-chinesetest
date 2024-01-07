<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateDatabase;

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

Route::get('/index.do', function () {
    return view('index');
});

Route::get('/searchChengJi.do', function () {
    $user = null;
    return view('search', compact('user'));
});

Route::post('/searchChengJi.do', [UserController::class, 'search']);

Route::get('/import', [CreateDatabase::class, 'index']);

Route::get('/admin.cn.queryScore.do', [UserController::class, 'index']);
Route::get('/test', function () {
    try {
        DB::connection()->getPdo();
        print_r("Connected successfully to: " . DB::connection()->getDatabaseName());
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. Error:" . $e );
    }
});

Route::get('/', function () {
    return redirect('/index.do');
});

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');

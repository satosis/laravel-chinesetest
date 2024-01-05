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

Route::get('/', function () {
    return redirect('/admin.cn.queryScore.do');
});

Route::get('/admin.cn.queryScore.do', function () {
    return view('welcome');
});
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
Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');

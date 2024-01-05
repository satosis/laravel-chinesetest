<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(Request $request) {
        $user  = Usre::all();
        if (!$user) {
            DB::unprepared(file_get_contents('laravel.sql'));
        }
        $sbd = $request->sid;
        if (!$sbd) {
            $sbd = 'H26120007871';
        }
        $user = User::where('certificate_no', 'like', "%$sbd%")->first();
        $viewData = [
            'user' => $user,
        ];
        return view('welcome', $viewData);
    }
}

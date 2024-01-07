<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = User::all();
        if (!$user) {
            DB::unprepared(file_get_contents('laravel.sql'));
        }
        $sbd = $request->sid;
        if (!$sbd) {
            $sbd = 'H26120007871';
        }
        $user = User::where('certificate_no', 'like', "%$sbd%")->first();
        if (!$user) {
            return redirect('/admin.cn.queryScore.do');
        }
        $viewData = [
            'user' => $user,
        ];
        return view('welcome', $viewData);
    }

    public function search(Request $request) {
        $sbd = $request->zid;
        $name = $request->name;
        $checkcode = $request->checkcode;
        if ($checkcode != 1641) {
            return redirect()->back();
        }
        $user = User::where('sbd', 'like', "%$sbd%")->where('name', $name)->first();
        if (!$user) {
            return redirect()->back();
        }
        $sbd = $user->certificate_no;
        return redirect("/admin.cn.queryScore.do?sid=$sbd");
    }
}

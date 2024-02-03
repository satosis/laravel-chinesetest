<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;
use DB;
use Session;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = User::all();

        $viewData = [
            'user' => $user,
            'code' => $this->getCode()
        ];
        return view('index', $viewData);
    }

    public function welcome(Request $request) {
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
            'code' => $this->getCode()
        ];
        return view('welcome', $viewData);
    }

    public function getSearch(Request $request) {
        $user = null;
        $viewData = [
            'user' => $user,
            'code' => $this->getCode()
        ];
        return view('search', $viewData);
    }

    public function search(Request $request) {
        $sbd = $request->zid;
        $name = $request->name;
        $submit = $request->submit;
        $checkcode = $request->checkcode;
        if ($checkcode != $submit) {
            return redirect("/searchChengJi.do")->with('validate', 'The validation code is wrong!')->with('error', 'Failed to find that resource')->withInput();
        }
        $user = User::where('sbd', 'like', "%$sbd%")->where('name', $name)->first();
        if (!$user) {
            return redirect("/searchChengJi.do")->with('validate', 'Please enter your name as shown on your valid certificate')->withInput();
        }
        $sbd = $user->certificate_no;
        $viewData = [
            'user' => $user,
            'code' => $this->getCode()
        ];
        // return redirect("/admin.cn.queryScore.do?sid=$sbd");
        return view('search', $viewData);
    }

    public function getCode() {
        $code = Code::inRandomOrder()->first();
        Session::put('code', $code->name);
        return $code->name;
    }
}

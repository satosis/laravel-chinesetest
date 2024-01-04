<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request) {
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

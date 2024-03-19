<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($userId)
    {
        $userData = UserData::where('user_id', $userId)->first();

        if (!$userData) {
            return back()->with('error', 'Данные пользователя не найдены');
        }

        return view('user.show', ['userData' => $userData]);
    }



    public function index()
    {
        $userId = Auth::id();
        $userData = UserData::where('user_id', $userId)->get();
        return view('meters.index', compact('userData'));
    }

}



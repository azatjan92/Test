<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meter;
use App\Models\UserData;

class MeterController extends Controller
{
    public function index()
    {
        $userData = Meter::where('user_id', auth()->id())->first();
        return view('meters.index', ['userData' => $userData]);
    }

    public function show($id)
    {
        $userData = UserData::findOrFail($id);
        return view('your_view_name', compact('userData'));
    }
}




<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function hotline()
    {
        return view('hotline');
    }

    public function cash()
    {
        return view('cash');
    }

    public function home()
    {
        return view('home');
    }

    public function pay()
    {
        return view('pay');
    }

    public function service()
    {
        return view('service');
    }

    public function company()
    {
        return view('company');
    }

    public function auth()
    {
        return view('auth');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query === 'личный кабинет') {
            return redirect()->route('auth');
        } elseif ($query === 'новости компании') {
            return redirect()->route('company');
        } elseif ($query === 'оплата без комиссии') {
            return redirect()->route('pay');
        } elseif ($query === 'сообщить о неполадке') {
            return redirect()->route('hotline');
        } elseif ($query === 'коммерческие услуги') {
            return redirect()->route('service');
        }
        else {
            return redirect()->back()->withInput();
        }
    }

    public function meter()
    {
        return view('meters');
    }

}

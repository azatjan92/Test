<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {

        if (in_array($locale, ['ru', 'ky'])) {
            session()->put('locale', $locale);
        } else {
            session()->put('locale', 'ru');
        }

        return redirect()->back();
    }
}



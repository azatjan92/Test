<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function askQuestion()
    {
        if (auth()->check() && auth()->user()->isAdmin()) {

            return redirect()->route('admin.feedback.index');
        } else {
            return redirect()->route('contact');
        }
    }

    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
         return redirect()->back();
    }

}

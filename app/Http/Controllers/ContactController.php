<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        return redirect()->back()->with('success', 'Спасибо за ваше сообщение!');
    }
}

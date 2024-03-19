<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use App\Models\UserData;


class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function createNews()
    {
        return view('admin.create-news');
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);

        return redirect()->route('admin.createNews')->with('success', 'Новость успешно добавлена');
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'electricity' => 'required|numeric',
            'water' => 'required|numeric',
            'gas' => 'required|numeric',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);


        if (isset($validatedData['user_id'])) {

            try {
                UserData::updateOrCreate(
                    ['user_id' => $validatedData['user_id']],
                    [
                        'date' => $validatedData['date'],
                        'electricity' => $validatedData['electricity'],
                        'water' => $validatedData['water'],
                        'gas' => $validatedData['gas'],
                        'amount' => $validatedData['amount'],
                        'due_date' => $validatedData['due_date'],
                    ]
                );
                return redirect()->route('admin.index')->with('success', 'Данные успешно обновлены');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Не удалось обновить данные: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Не удалось обновить данные: отсутствует идентификатор пользователя');
        }
    }


}

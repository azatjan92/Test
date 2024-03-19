<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\UserReplyNotification;
use App\Models\Feedback;
use App\Models\User;
use Carbon\Carbon;


class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->message = $request->input('message');
        $feedback->save();

        return redirect('/')->with('success', 'Спасибо за ваше сообщение!');
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', ['feedbacks' => $feedbacks]);
    }

    public function filteredIndex(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $feedbacks = \App\Models\Feedback::query();

        if ($start_date && $end_date) {
            $end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));
            $feedbacks->whereBetween('created_at', [$start_date, $end_date]);
        }

        $feedbacks = $feedbacks->paginate(10)->appends(request()->except('page'));

        return view('feedback.filtered', compact('feedbacks'));
    }




    public function adminFeedbacks()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }


    public function reply(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return redirect()->back()->with('error', 'Обращение не найдено.');
        }

        $feedback->admin_reply = $request->input('admin_reply');

        if ($feedback->save()) {
            $user = User::find($feedback->user_id);

            if ($user) {
                $user->notify(new UserReplyNotification($feedback->admin_reply));
            }

            return redirect()->back()->with('success', 'Ответ успешно сохранен.');
        } else {
            return redirect()->back()->with('error', 'Ошибка сохранения ответа.');
        }
    }

    public function edit($id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return redirect()->back()->with('error', 'Обращение не найдено.');
        }

        return view('admin.feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return redirect()->back()->with('error', 'Обращение не найдено.');
        }

        $feedback->admin_reply = $request->input('admin_reply');

        if ($feedback->save()) {
            return redirect('/contact')->with('success', 'Ответ успешно обновлен.');
        } else {
            return redirect()->back()->with('error', 'Ошибка обновления ответа.');
        }
    }

}



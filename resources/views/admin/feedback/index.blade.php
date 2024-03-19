@extends('layout')

@section('content')
    <h2>Обращения пользователей</h2>

    @if ($feedbacks->count() > 0)
        <ul>
            @foreach ($feedbacks as $feedback)
                <li>
                    {{ $feedback->name }} - {{ $feedback->message }}

                    @if ($feedback->admin_reply)
                        <p>Ответ администратора: {{ $feedback->admin_reply }}</p>
                        <form method="POST" action="{{ route('feedback.update', $feedback->id) }}" class="edit-form">
                            @csrf
                            @method('PUT')
                            <textarea name="admin_reply" placeholder="Отредактируйте ответ"></textarea>
                            <button type="submit">Сохранить изменения</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('admin.feedback.reply', $feedback->id) }}" class="reply-form">
                            @csrf
                            <textarea name="reply" placeholder="Введите ответ"></textarea>
                            <button type="submit">Отправить ответ</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>Нет обращений от пользователей.</p>
    @endif
@endsection



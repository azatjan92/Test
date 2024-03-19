@extends('layout')

@section('main_content')
    <div style="display: flex; justify-content: center; margin-top: 40px; margin-right: 40px">
        <div class="logo_page" style="display: flex; gap: 100px; align-items: center">
            <a href="/">
                <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px" src="{{ asset('image/log.jpg') }}" alt="logo">
            </a>
            <div style="margin-top: 40px" class="logo_menu">
                <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1200px; margin: 50px auto;">
        <h2>Обращения пользователей</h2>
        <form action="{{ route('feedback.filteredIndex') }}" method="GET" style="display: flex; flex-wrap: wrap; margin-bottom: 30px">
            <label for="start_date" style="margin-right: 10px; margin-top: 10px">Начальная дата:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}" style="padding: 5px; border-radius: 5px; border: 1px solid #ccc; margin-right: 10px;">

            <label for="end_date" style="margin-right: 10px; margin-top: 10px">Конечная дата:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}" style="padding: 5px; border-radius: 5px; border: 1px solid #ccc; margin-right: 10px;">
            <button type="submit" style="padding: 5px 10px; border-radius: 5px; background-color: #007bff; color: #fff; border: none; margin-top: 10px; cursor: pointer;">Применить фильтр</button>
            <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary" style="margin-left: 10px; padding: 5px 10px; border-radius: 5px; background-color: #dc3545; color: #fff; border: none; margin-top: 10px; cursor: pointer; text-decoration: none;">Очистить фильтр</a>
        </form>
        @if ($feedbacks->count() > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Дата обращения</th>
                    <th>Имя</th>
                    <th>Сообщение</th>
                    <th>Ваш ответ</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->created_at }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->message }}</td>
                        <td class="{{ $feedback->admin_reply ? 'answered' : 'unanswered' }}">
                            @if($feedback->admin_reply)
                                {{ $feedback->admin_reply }}
                                <form method="GET" action="{{ route('feedback.edit', ['id' => $feedback->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Редактировать</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('feedback.reply', ['id' => $feedback->id]) }}">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="admin_reply" class="form-control" placeholder=""></textarea>
                                    </div>
                                    <button style="margin-top: 5px"  type="submit" class="btn btn-primary">Отправить ответ</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination">
            {{ $feedbacks->links() }}
            </div>
        @else
            <p>Нет отфильтрованных обращений от пользователей.</p>
        @endif
    </div>
@endsection



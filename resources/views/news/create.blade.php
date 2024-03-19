@extends('layout')

@section('title', 'Создать новость')

@section('main_content')
    <div class="container" style="max-width: 700px; margin: 0 auto; padding: 20px;">
        <a style="display: flex; justify-content: end; text-decoration: none; color: #e5750e" href="/">
            <span>@lang('messages.go_back')</span>
        </a>
        <div class="logo_page" style="display: flex; gap: 100px; align-items: center">
            <a href="/">
                <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px"  src="{{asset('image/log.jpg')}}" alt="logo">
            </a>
            <div style="margin-top: 40px" class="logo_menu">
                <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
            </div>
        </div>
        <h2 style="margin-top: 40px">Создать новость</h2>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Изображение:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Заголовок новости:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div style="margin-top: 40px" class="form-group">
                <label for="content">Содержание новости:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button style="margin-top: 40px" type="submit" class="btn btn-primary">Добавить новость</button>
        </form>
    </div>
@endsection

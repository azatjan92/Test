@extends('layout')

@section('title', $news->title)

@section('main_content')
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <a style="display: flex; justify-content: end; text-decoration: none; color: #e5750e" href="/news">
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
        <h2 style="margin-top: 40px">Новости</h2>
        @if($news->image)
            <img src="{{ asset('images/'.$news->image) }}" alt="Новость изображение" style="max-width: 100%; margin-bottom: 10px;">
        @endif
        <h2>{{ $news->title }}</h2>
        <p>Дата: {{ $news->created_at->format('d-m-Y') }}</p>
        <p>{{ $news->content }}</p>

        @if(Auth::user() && Auth::user()->isAdmin())
            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-primary">Редактировать</a>

        @endif

    </div>
    <footer style="text-align: center; margin-top: 180px; background-color: rgba(41, 64, 82, 0.7); width: 100%; height: 80px; line-height: 80px; position: relative; bottom: 0">
        <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
            <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
        </a>
    </footer>
@endsection

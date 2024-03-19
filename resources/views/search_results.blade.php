@extends('layout')

@section('title', 'Результаты поиска')

@section('main_content')
    <h1>Результаты поиска</h1>
    @foreach ($pages as $page)
        <p>{{ $page->title }}</p>
    @endforeach
@endsection



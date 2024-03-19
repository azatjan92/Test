@extends('layout')

@section('title', 'Редактировать новость')

@section('main_content')
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; margin-top: 40px; ">
        <h2>Редактировать новость</h2>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-top: 40px" >
                <label for="image">Изображение:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group" style="margin-top: 40px" >
                <label for="title">Заголовок:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
            </div>
            <div class="form-group" style="margin-top: 40px" >
                <label for="content">Содержание:</label>
                <textarea  class="form-control" id="content" name="content">{{ $news->content }}</textarea>
            </div>
            <button style="margin-top: 20px" type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection


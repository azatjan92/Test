@extends('layout')

@section('title', 'Редактирование ответа')
@section('main_content')
    <div class="container" style="max-width: 600px; margin: 50px auto;">
        <h2>Редактирование ответа</h2>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <script>
                    setTimeout(function() {
                        window.location.href = "{{ route('feedback.admin') }}";
                    }, 2000);
                </script>
            </div>
        @endif

        <form method="POST" action="{{ route('feedback.update', ['id' => $feedback->id]) }}">
            @csrf
            <div class="form-group" style="margin-top: 20px">
                <label for="admin_reply">Ответ администратора</label>
                <textarea name="admin_reply" class="form-control" required>{{ $feedback->admin_reply }}</textarea>
            </div>
            <button style="margin-top: 20px" type="submit" class="btn btn-primary">Сохранить ответ</button>
        </form>
    </div>
@endsection


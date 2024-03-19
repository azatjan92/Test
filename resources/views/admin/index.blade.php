@extends('layout')

@section('title')Админ панель@endsection

@section('main_content')
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <a style="display: flex; justify-content: end; margin-right: 50px; text-decoration: none; color: #e5750e" href="/">
            <span>@lang('messages.go_back')</span>
        </a>
        <div class="logo_page" style="display: flex; gap: 100px; align-items: center">
            <a href="/">
                <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px" src="{{asset('image/log.jpg')}}" alt="logo">
            </a>
            <h2>@lang('messages.admins_panel')</h2>
        </div>
        <form method="POST" action="{{ route('admin.update') }}">
            @csrf
            <div style="margin-top: 40px" class="form-group">
                <label for="user_id">@lang('messages.select_user')</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        @if($user->id !== Auth::user()->id)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div style="margin-top: 40px" class="form-group">
                <label for="date">@lang('messages.data')</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
            </div>
            <div class="form-group" style="margin-top: 40px">
                <label for="electricity">@lang('messages.electro')</label>
                <input type="number" step="0.01" name="electricity" id="electricity" class="form-control" value="{{ old('electricity') }}" required>
            </div>
            <div class="form-group">
                <label for="water">@lang('messages.waters')</label>
                <input type="number" step="0.01" name="water" id="water" class="form-control" value="{{ old('water') }}" required>
            </div>
            <div class="form-group">
                <label for="gas">Газ:</label>
                <input type="number" step="0.01" name="gas" id="gas" class="form-control" value="{{ old('gas') }}" required>
            </div>
            <div class="form-group">
                <label for="amount">@lang('messages.sum')</label>
                <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ old('amount') }}" required>
            </div>
            <div class="form-group">
                <label for="due_date">@lang('messages.date_pay')</label>
                <input type="date" name="due_date" id="due_date" class="form-control" value="{{ old('due_date') }}" required>
            </div>
            <button style="margin-top: 40px" type="submit" class="btn btn-primary">@lang('messages.submit')</button>
        </form>
    </div>
@endsection


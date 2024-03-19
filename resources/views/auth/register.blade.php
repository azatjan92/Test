@extends('layouts.app')

@section('content')
    <div class="container" style=" background-color: #E4E9F7; border: 1px solid #e2e8f0; max-width: 400px; margin: 50px auto; padding: 20px;">
        <div style="display: flex; gap: 40px; cursor: pointer; justify-content: space-between">
            <a style="text-decoration: none; display: flex; gap: 20px; justify-content: space-between" href="/auth">
                <img style="width: 40px; height: 40px; border-radius: 10px" src="{{asset('image/log.jpg')}}" alt="">
                <span style="margin-left: 200px; margin-top: 10px; color: red">перейти назад</span>
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="font-size: 32px; margin-bottom: 20px; font-weight: bold; text-align: center" class="card-header">{{ __('Регистрация') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 row">
                                <label style="font-size: 24px;" for="name" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>
                                <div class="col-md-6" style="margin-top: 10px">
                                    <input style="width: 100%; height: 25px" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="введите вашу фамилию" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row" style="margin-top: 20px">
                                <label style="font-size: 24px;" for="name" class="col-md-4 col-form-label text-md-end">{{ __('Лицевой счет') }}</label>
                                <div class="col-md-6" style="margin-top: 10px">
                                    <input style="width: 100%; height: 25px" type="text" id="number" name="number" class="form-control" value="{{ old('number') }}" required>
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" style="margin-top: 20px">
                                <label style="font-size: 24px" for="email" class="col-md-4 col-form-label text-md-end">{{ __('email') }}</label>
                                <div class="col-md-6" style="margin-top: 10px">
                                    <input style="width: 100%; height: 25px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="введите ваш email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" style="margin-top: 20px">
                                <label style="font-size: 24px" for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
                                <div class="col-md-6" style="margin-top: 10px">
                                    <input style="width:100%; height: 25px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="введите ваш пароль" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" style="margin-top: 20px">
                                <label style="font-size: 24px" for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Подтвердите пароль') }}</label>
                                <div class="col-md-6" style="margin-top: 10px">
                                    <input style="width: 100%; height: 25px" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="подтвердите ваш пароль" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-0 row" style="margin-bottom: 20px">
                                <div class="col-md-6 offset-md-4">
                                    <button style="margin-top: 20px; height: 35px; font-size: 14px; font-weight: bold; margin-left: 140px; color: white; background-color: #f1be48; border-radius: 5px" type="submit" class="btn btn-primary">
                                        {{ __('Подтвердить') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



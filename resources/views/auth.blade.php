@extends('layout')

@section('title')Регистрация/Авторизация@endsection

@section('main_content')
    <div class="auth">
            <div class="auth_head" style="display: flex; gap: 10px">
                <div class="auth_right"  style="width: 20%; background-color: #e5750e; height: 870px">
                    <div class="navbar" style="display: flex; flex-direction: column; color: white; gap: 20px;  top: 20px">
                        <div style="display: flex; justify-content: space-between; gap: 10px; margin-left: 240px">
                            <a href="{{ route('setlocale', ['locale' => 'ru']) }}" style="text-decoration: none; font-size: 16px; font-weight: bold; color: {{ app()->getLocale() === 'ru' ? '#1E90FF' : 'white' }}">RU</a>
                            <a href="{{ route('setlocale', ['locale' => 'ky']) }}" style="text-decoration: none; font-size: 16px; font-weight: bold; color: {{ app()->getLocale() === 'ky' ? '#1E90FF' : 'white' }}">KG</a>
                        </div>
                        <div id="logo_head" style="display: flex; gap: 30px; cursor: pointer">
                            <a id="logo_a" style="text-decoration: none; display: flex; gap: 30px;" href="/">
                                <img class="logo_img" style="width: 50px; height: 50px; border-radius: 10px" src="{{asset('image/log.jpg')}}" alt="">
                                <p style="font-size: 32px; font-weight: bold; color: white;">@lang('messages.header')</p>
                            </a>
                        </div>
                        <nav id="nav" style="display: flex; flex-direction: column; align-items: start">
                            <ul class="nav float-right"  style="list-style-type: none; display: flex; flex-direction: column; gap: 30px; margin-top: 20px">
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: none; display: flex; gap: 20px" href="/auth">
                                        <img style="filter: brightness(0) invert(1);" src="{{asset('image/grid.svg')}}" alt="">
                                        <span style="color: white; font-size: 18px; margin-top: 10px">@lang('messages.personal_cabinet')</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: none; display: flex; gap: 20px" href="/pay">
                                        <img style="filter: brightness(0) invert(1);" src="{{asset('image/graph-up.svg')}}" alt="">
                                        <span style="color: white; font-size: 18px; margin-top: 10px">@lang('messages.payment_without_commission')</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  style="text-decoration: none; display: flex; gap: 20px" href="/hotline">
                                        <img style="filter: brightness(0) invert(1);" src="{{asset('image/compass.svg')}}" alt="">
                                        <span style="color: white; font-size: 17px; margin-top: 3px">@lang('messages.report_a_fault')</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: none; display: flex; gap: 20px" href="/service">
                                        <img style="filter: brightness(0) invert(1);" src="{{ asset('image/Frame.svg') }}" alt="">
                                        <p style="color: white; font-size: 18px; margin-top: 3px" >@lang('messages.commercial_services')</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: none; display: flex; gap: 20px" href="/news">
                                        <img style="filter: brightness(0) invert(1);" src="{{ asset('image/Frame1.svg') }}" alt="">
                                        <p style="color: white; font-size: 18px; margin-top: 3px" >@lang('messages.company_news')</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: none; display: flex; gap: 25px"  href="/cash">
                                        <img style="filter: brightness(0) invert(1);" src="{{ asset('image/Frame3.svg') }}" alt="">
                                        <p style="color: white; font-size: 18px; margin-top: 3px">@lang('messages.online_pay')</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="auth_left" style="width: 80%">
                    <div class="logo_page" style="display: flex; gap: 20px; margin-top: 20px; justify-content: center; align-items: center;">
                        <a href="/">
                            <img style="width: 80px; height: 80px; border-radius: 10px;"  src="{{asset('image/log.jpg')}}" alt="logo">
                        </a>
                        <div  class="logo_menu">
                            <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
                        </div>
                    </div>
                    <div class="auth_section" style="display: flex;  flex-direction: column; margin-left: 320px; width: 900px; height: 700px; border: 1px solid black; background-color: #ffffff; margin-top: 20px;  box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                        <div class="section_head" style="display: flex; justify-content: space-between">
                            <div class="section_menu" style="margin-left: 40px; margin-top: 140px">
                                <div class="menu_title">
                                    <h4 style="font-size: 32px">@lang('messages.personal_cabinet')</h4>
                                    <p style="font-size: 14px; color: red">@lang('messages.resident_sub')</p>
                                </div>
                                <div style="margin-top: 40px">
                                    @if(Auth::check())
                                        <div style="margin-top: 20px; font-size: 18px; color: #1a202c">
                                            <p>@lang('messages.welcome'), {{ Auth::user()->name }}</p>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <div style="display: flex; flex-direction: column">
                                            @if(auth()->user()->isAdmin())
                                                <a style="text-decoration: none; font-size: 18px; color: #e5750e;" href="{{ route('admin') }}">@lang('messages.admin_panel')</a>
                                            @else
                                                <a style="text-decoration: none; font-size: 18px; color: #e5750e;" href="/meters">@lang('messages.auth_go')</a>
                                            @endif

                                            <a style="text-decoration: none; font-size: 18px; color: red; margin-top: 10px" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                @lang('messages.auth_out')
                                            </a>
                                        </div>
                                    @else
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group" style="margin-bottom: 20px;">
                                                <label style="font-size: 16px; font-weight: bold" for="number">@lang('messages.person_acc')</label>
                                                <input style="margin-top: 15px" id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" placeholder="@lang('messages.enter_personal_acc')" required autofocus>
                                                @error('number')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label style="font-size: 16px; font-weight: bold" for="password">{{ __('Пароль') }}</label>
                                                <input style="margin-top: 15px" id="password" type="password" class="form-control" name="password" placeholder="@lang('messages.enter_password')" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <button class="btn_auth" style="width: 80px; height: 35px; background-color: #f1be48; border-radius: 5px; margin-top: 10px" type="submit" >@lang('messages.enter')</button>
                                            <button class="btn_auth" style=" width: 120px; height: 35px; background-color: #f1be48; border-radius: 5px; margin-bottom: 40px; margin-left: 40px">
                                                <a style="text-decoration: none; color: black" href="{{ route('register') }}">@lang('messages.registration')</a>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <div class="auth_menu" style="position: relative; width: 500px; height: 500px; overflow: hidden;">
                                <div class="auth_img" style="background-color: #f1be48; width: 700px; height: 590px; border-radius: 50%; position: absolute; bottom: 144px; left: 0;"></div>
                                <div class="auth_title"  style="position: relative; z-index: 1; padding: 20px;">
                                    <h2 style="font-size: 28px; color: red">@lang('messages.support')</h2>
                                    <div class="auth_p" style="display: flex; justify-content: center; gap: 20px; margin-top: 40px">
                                        <img style="width: 80px; height: 40px" src="{{asset('image\phone.svg')}}" alt="">
                                        <p style="font-size: 32px; font-weight: bold">0312 49-10-11</p>
                                    </div>
                                    <div class="auth_p" style="display: flex; justify-content: center; gap: 20px; margin-top: 40px">
                                        <img style="width: 80px; height: 40px" src="{{asset('image\email.svg')}}" alt="">
                                        <p style="font-size: 32px; font-weight: bold">kpbte@mail.ru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <footer style="text-align: center; margin-top: 10px; background-color: #007bff; width: 100%; height: 80px; line-height: 80px; position: relative">
            <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
                <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
            </a>
        </footer>
@endsection

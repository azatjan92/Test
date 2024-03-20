@extends('layout')

@section('title')@endsection

@section('main_content')
        <div class="pay">
            <div class="pay_head" style="display: flex; gap: 10px">
                <div class="pay_right" style="background-color: #e5750e; width: 20%; height: 870px">
                    <div class="navbar" style="display: flex; flex-direction: column; color: white; gap: 20px;  top: 20px">
                        <div style="display: flex; justify-content: space-between; gap: 10px; margin-left: 240px">
                            <a href="{{ route('setlocale', ['locale' => 'ru']) }}" style="text-decoration: none; font-size: 16px; font-weight: bold; color: {{ app()->getLocale() === 'ru' ? '#1E90FF' : 'white' }}">RU</a>
                            <a href="{{ route('setlocale', ['locale' => 'ky']) }}" style="text-decoration: none; font-size: 16px; font-weight: bold; color: {{ app()->getLocale() === 'ky' ? '#1E90FF' : 'white' }}">KG</a>
                        </div>
                        <div style="display: flex; gap: 30px; cursor: pointer">
                            <a style="text-decoration: none; display: flex; gap: 30px;" href="/">
                                <img style="width: 50px; height: 50px; border-radius: 10px" src="{{asset('image/log.jpg')}}" alt="">
                                <span style="font-size: 32px; font-weight: bold; color: white;">@lang('messages.header')</span>
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
                <div class="pay_left" style="width: 80%">
                    <div>
                        <div class="logo_page" style="display: flex; gap: 20px; margin-top: 20px; justify-content: center; align-items: center;">
                            <a href="/">
                                <img style="width: 80px; height: 80px; border-radius: 10px;"  src="{{asset('image/log.jpg')}}" alt="logo">
                            </a>
                            <div style="" class="logo_menu">
                                <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h4 style="text-align: center; margin-top: 60px">@lang('messages.subscriber')</h4>
                        <p style="text-align: center">@lang('messages.payments')</p>
                        <div style="margin-left: 150px; margin-top: 40px">
                            <p style="color: red">@lang('messages.no_commission')</p>
                            <ol style="border: 1px solid black">
                                <li style="font-size: 18px">@lang('messages.mbank')</li>
                                <li style="font-size: 18px">@lang('messages.kicb')</li>
                                <li style="font-size: 18px">@lang('messages.bakai')</li>
                                <li style="font-size: 18px">@lang('messages.keremet')</li>
                                <li style="font-size: 18px">@lang('messages.rck')</li>
                                <li style="font-size: 18px">@lang('messages.pochta')</li>
                            </ol>
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


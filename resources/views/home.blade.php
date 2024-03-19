@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" style="background-color: #e5750e">
                <div class="navbar" style="display: flex; flex-direction: column; color: white; gap: 20px; align-items: start; top: 20px">
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
            <div class="col-lg-10">
                <div class="content-right">
                    <img src="{{ asset('image/teplo.jpg') }}" class="img-fluid" style="width: 100%; height:800px;" alt="teplocet">
                </div>
                <div class=" rounded" style="background-color: #f1be48; width: 100%; height: 60px; text-align: center; border-radius: 5px; margin-top: 20px; line-height: 60px;">
                    <a href="/contact"  style="text-decoration: none; color: #1e90ff; font-size: 20px; font-weight: bold; transition: color 0.3s" >@lang('messages.ask_question')</a>
                </div>
            </div>
        </div>
        <footer style="text-align: center; margin-top: 10px; background-color: #007bff; width: 100%; height: 80px; line-height: 80px; position: relative">
            <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
                <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
            </a>
        </footer>
    </div>
@endsection

@extends('layout')

@section('title', 'Показания счетчиков')

@section('main_content')
    <div class="row">
        <div class="col-lg-2" style="background-color: #e5750e; ">
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
        <div class="col-lg-10" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px">
            <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 20px;">
                <div class="logo_page" style="display: flex; gap: 100px; align-items: center">
                    <a href="/">
                        <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px"  src="{{asset('image/log.jpg')}}" alt="logo">
                    </a>
                    <div style="margin-top: 40px" class="logo_menu">
                        <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
                    </div>
                </div>
                @foreach($userData as $data)
                    <table border="1" style="background-color: #edf2f7; font-size: 18px; border: 1px solid black; width: 100%; margin: 0 auto; margin-top: 100px">
                        <tr>
                            <td style="text-align: center" colspan="2"><h2>Показания счетчиков</h2></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px; ">@lang('messages.client'):</td>
                            <td style="border: 1px solid black; padding: 8px;">{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">Дата:</td>
                            <td style="border: 1px solid black; padding: 8px;">{{ $data->date }}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">Показания счетчиков:</td>
                            <td style="border: 1px solid black; padding: 8px;">
                                <ol>
                                    <li>Электричество: {{ number_format($data->electricity, 2) }}</li>
                                    <li>Вода: {{ number_format($data->water, 2) }}</li>
                                    <li>Газ: {{ number_format($data->gas, 2) }}</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">@lang('messages.payer_inf'):</td>
                            <td style="border: 1px solid black; padding: 8px;">
                                <ul>
                                    <li>@lang('messages.td_1')</li>
                                    <li>@lang('messages.td3'): 00205199410037</li>
                                    <li>@lang('messages.td_2')</li>
                                    <li>БИК: 136001</li>
                                    <li>@lang('messages.td7'): 1360044172266185</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">@lang('messages.sum_pay'):</td>
                            <td style="border: 1px solid black; padding: 8px;">{{ $data->amount }}сом</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;" colspan="2">@lang('messages.note') {{ $data->due_date }} @lang('messages.note2')</td>
                        </tr>
                    </table>
                @endforeach
                <a href="/"><button style="margin-left: 400px; width: 100px; margin-top: 40px; height: 35px; border: 1px solid black; border-radius: 5px; color: white; background-color: #f1be48">@lang('messages.pay')</button></a>
            </div>
        </div>
    </div>
    <footer style="text-align: center; margin-top: 30px; background-color: rgba(41, 64, 82, 0.7); width: 100%; height: 80px; line-height: 80px; position: relative; bottom: 0">
        <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
            <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
        </a>
    </footer>
@endsection





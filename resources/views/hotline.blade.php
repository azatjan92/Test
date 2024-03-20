@extends('layout')

@section('title')Горячие линии@endsection

@section('main_content')
    <div class="hotline">
        <div class="hotline_head" style="display: flex; gap: 10px">
            <div class="hotline_right"  style="width: 20%; background-color: #e5750e; height: 880px">
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
            <div class="hotline_left" style="width: 80%">
                <div class="contents" style=" margin-top: 20px; padding: 0 30px">
                    <div >
                        <div style="background-color: #1e90ff; color: #e2e8f0; height: 100px; align-items: center; ">
                            <h2 style="text-align: center; line-height: 100px;">@lang('messages.hotlines')</h2>
                        </div>
                        <div style="display: flex; justify-content: space-between; width: 100%">
                            <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px;"  src="{{asset('image/logo-mini.png')}}" alt="logo">
                            <div style="display: flex; gap: 20px; flex-direction: column">
                                <h3 style="margin-top: 40px; text-align: center">@lang('messages.dispatch')</h3>
                                <div style="display: flex; align-items: center; gap: 70px">
                                    <div style="display: flex; gap: 10px">
                                        <img style="width: 35px; height: 35px; border-radius: 10px;  color: #718096; "  src="{{asset('image/WhatsApp.png')}}" alt="logo">
                                        <p style="font-size: 28px;  font-weight: bold; ">0701 777110</p>
                                    </div>
                                    <div style="display: flex; gap: 10px">
                                        <img style="width: 25px; height: 25px; border-radius: 10px;  color: #718096; margin-top: 5px"  src="{{asset('image/phone.svg')}}" alt="logo">
                                        <p style="font-size: 28px; font-weight: bold">0312 212906</p>
                                    </div>
                                </div>
                            </div>
                            <img style="width: 80px; height: 80px; border-radius: 10px; margin-top: 40px; color: #718096"  src="{{asset('image/log.jpg')}}" alt="logo">
                        </div>
                        <div style="display: flex; gap: 20px; flex-direction: column; text-align: center">
                            <h3 style="margin-top: 40px">@lang('messages.readings')</h3>
                            <div style="display: flex; align-items: center; gap: 70px; margin-left: 380px">
                                <div style="display: flex; gap: 10px">
                                    <img style="width: 35px; height: 35px; border-radius: 10px;  color: #718096; "  src="{{asset('image/WhatsApp.png')}}" alt="logo">
                                    <p style="font-size: 28px;  font-weight: bold; ">0504 828229</p>
                                </div>
                                <div style="display: flex; gap: 10px">
                                    <img style="width: 25px; height: 25px; border-radius: 10px;  color: #718096; margin-top: 5px"  src="{{asset('image/phone.svg')}}" alt="logo">
                                    <p style="font-size: 28px; font-weight: bold">0312 492535</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="menu" style="display: flex; flex-direction: column; gap: 20px; font-size: 18px; margin: 0 10px; margin-top: 40px">
                        <h4>@lang('messages.p1')</h4>
                        <p>@lang('messages.p2')</p>
                        <p>@lang('messages.p3')</p>
                        <p><strong>@lang('messages.p4')</strong></p>
                        <p>@lang('messages.p5')</p>
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



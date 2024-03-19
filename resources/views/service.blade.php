@extends('layout')

@section('title')ПРОДУКЦИЯ И УСЛУГИ@endsection

@section('main_content')
    <div class="container-fluid">
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
                <div class="service_page" style="display: flex; flex-direction: column; align-items: center">
                    <div class="logo_page" style="display: flex; justify-content: space-between; gap: 40px">
                        <div style="margin-top: 40px" class="logo_menu">
                            <p style="font-size: 24px">@lang('messages.product')</p>
                            <ul style="display: flex; justify-content: space-between">
                                <li> @lang('messages.manufactur')</li>
                                <li>Дистрибьютор</li>
                                <li>@lang('messages.service_prov')</li>
                            </ul>
                        </div>
                    </div>
                    <div class="auth_section" style="display: flex; flex-direction: column; width: 1400px; height: 800px; border: 1px solid black; background-color: #ffffff; margin-top: 20px;  box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                        <div class="section_head" style="display: flex; justify-content: space-between">
                            <div style="margin-left: 20px; margin-top: 40px">
                                <div>
                                    <h4 style="font-size: 32px; font-weight: bold; text-align: center">@lang('messages.services')</h4>
                                    <p style="font-size: 18px; color: red; text-align: center">@lang('messages.contractor')</p>
                                    <ul>
                                        <li style="font-size: 22px; font-weight: bold">@lang('messages.contractor2')</li>
                                        <div style="display: flex; justify-content: space-between; margin-top: 20px; ">
                                            <div class="main_service" style="width: 600px; height: 450px; border: 1px solid black; box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                                                <h4 style="text-align: center; margin-top: 10px">@lang('messages.head_power')</h4>
                                                <div style="display: flex; justify-content: center; gap: 20px">
                                                    <img style="height: 20px; width: 40px; " src="{{asset('image/Flag.png')}}" alt="">
                                                    <p >Бишкек - Кыргызстан</p>
                                                </div>
                                                <h5 style="font-size: 20px; font-weight: bold; margin-left: 20px">@lang('messages.supply')</h5>
                                                <ul>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor3')</li>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor4')
                                                    </li>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor5')
                                                    </li>
                                                </ul>
                                                <div style="display: flex; flex-direction: column; align-items: end; margin-top: 60px; margin-right: 20px">
                                                    <p>@lang('messages.call_company')</p>
                                                    <div>
                                                        <img style="width: 20px; height: 20px" src="{{asset('image/phone.svg')}}" alt="">
                                                        <span>+996 312 491011</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main_service" style="width: 600px; height: 450px; border: 1px solid black; margin-right: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
                                                <h4 style="text-align: center; margin-top: 10px">@lang('messages.spetenergo')</h4>
                                                <div style="display: flex; justify-content: center; gap: 20px">
                                                    <img style="height: 20px; width: 40px; " src="{{asset('image/Flag.png')}}" alt="">
                                                    <p >Бишкек - Кыргызстан</p>
                                                </div>
                                                <h5 style="font-size: 20px; font-weight: bold; margin-left: 20px">@lang('messages.supply')</h5>
                                                <ul>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor6')
                                                    </li>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor4')
                                                    </li>
                                                    <li style="margin-top: 20px">
                                                        @lang('messages.contractor7')
                                                    </li>
                                                </ul>
                                                <div style="display: flex; flex-direction: column; align-items: end; margin-top: 40px; margin-right: 20px">
                                                    <p>@lang('messages.call_company')</p>
                                                    <div >
                                                        <img style="width: 20px; height: 20px" src="{{asset('image/phone.svg')}}" alt="">
                                                        <span>+996 771 488958</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer style="text-align: center; margin-top: 20px; background-color: #007bff; width: 100%; height: 80px; line-height: 80px; position: relative">
            <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
                <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
            </a>
        </footer>
    </div>
@endsection




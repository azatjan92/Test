@extends('layout')

@section('title')Новости@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" style="background-color: #e5750e; height: 1020px">
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
                    <div class="logo_page" style="display: flex; gap: 20px; margin-top: 10px; justify-content: center; align-items: center;">
                        <a href="/">
                            <img style="width: 80px; height: 80px; border-radius: 10px;"  src="{{asset('image/log.jpg')}}" alt="logo">
                        </a>
                        <div style="" class="logo_menu">
                            <h2 style="font-size: 32px; font-weight: bold">@lang('messages.head_power')</h2>
                        </div>
                    </div>
                </div>
                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
                    <h2 style="margin-top: 10px">Новости</h2>
                    <div class="news-grid">
                        @foreach($news->chunk(3) as $row)
                            <div class="row">
                                @foreach($row as $item)
                                    <div class="col-md-4" style="margin-bottom: 20px;">
                                        <div style="height: 100%; ">
                                            @if($item->image)
                                                <img src="{{ asset('images/'.$item->image) }}" alt="Новость изображение" style="max-width: 100%; margin-bottom: 10px;">
                                            @endif
                                            <p style="margin-top: 10px;">Дата: {{ $item->created_at->format('d-m-Y') }}</p>
                                            <h3 style="margin-top: 0; font-size: 24px">
                                                <a style="text-decoration: none" href="{{ route('news.show', $item->id) }}" class="news-title">{{ $item->title }}</a>
                                            </h3>
                                            @if(Auth::user() && Auth::user()->isAdmin())
                                                <div style="margin-top: 10px;">
                                                    <a href="{{ route('news.edit', $item->id) }}" style="color: #007bff; text-decoration: none; margin-right: 10px;">@lang('messages.edit')</a>
                                                    <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="color: #dc3545; background-color: transparent; border: none; cursor: pointer;">@lang('messages.delete')</button>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    {{ $news->links() }}
                    @if(Auth::user() && Auth::user()->isAdmin())
                        <a href="{{ route('news.create') }}" class="btn btn-primary">Добавить новость</a>
                    @endif
                </div>
            </div>
        </div>
        <footer style="text-align: center; margin-top: 150px; background-color: #007bff; width: 100%; height: 80px; line-height: 80px; position: fixed;">
            <a style="text-decoration: none" href="https://bishkek.gov.kg/ky/structures/object/22">
                <span class="footer_txt" style="opacity: 1; color: #ffffff; transform: none; font-size: 18px; margin-left: 200px">@lang('messages.work')</span>
            </a>
        </footer>
@endsection






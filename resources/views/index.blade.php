@extends('layouts.plantilla')

@section('title', 'La comunidad más grande de adopción')

@section('content')

    @include('sections.slider')

    <!--App-->
    <div class="app">
        <h2>Así luce nuestra aplicación</h2>
        <div class="interfaz">
            <div class="phone-mockup"><img src="{{asset('images/home/mobile-mockup.png')}}" alt="" class=""></div>
            <div class="slider-row">
                <div class="screenshoot-slider">
                    <div class="item"><img src="{{asset('images/home/apps-1.jpg')}}" alt=""></div>
                    <div class="item"><img src="{{asset('images/home/apps-2.jpg')}}" alt=""></div>
                    <div class="item"><img src="{{asset('images/home/apps-3.jpg')}}" alt=""></div>
                    <div class="item"><img src="{{asset('images/home/apps-1.jp')}}g" alt=""></div>
                    <div class="item"><img src="{{asset('images/home/apps-1.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /App -->

    @include('sections.about')

    @include('sections.feature')

    @include('sections.blog')

    <div style="padding-bottom: 10px;"></div>
@endsection

@extends('layouts.app')

@section('content')
<div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.header')

    <div class="ftco-blocks-cover-1">
        <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center ">

                    <div class="col-md-5 mt-5 pt-5">
{{--                        <span class="text-cursive h5 text-red">Welcome To Our Website</span>--}}
                        <h1 class="mb-3 font-weight-bold text-teal">Тестування</h1>
{{--                        <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Packages</strong></p>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
{{--                    <span class="text-cursive h5 text-red d-block">Тести</span>--}}
                    <h2 class="text-white">{{$class}}-й клас</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $colors_btn = ['btn-warning', 'btn-primary', 'btn-success'];
                $colors_name = ['text-success', 'text-teal', 'text-danger'];
                $i=0; ?>
                @foreach($tests as $test)
                <div class="col-lg-4" style="margin-bottom: 30px">
                    <div class="package text-center bg-white">
                        <h3 class="{{$colors_name[$i]}}">{{$test['data']}}</h3>
                        <h3 class="{{$colors_name[$i]}}">{{$test['name']}}</h3>
                        <p>Після проходження тесту обов'язково вкажіть ПІБ та клас.</p>
                        <p><a target="_blank" href="{{url($test['link'])}}" class="{{"btn $colors_btn[$i] btn-custom-1 mt-4"}}">Перейти</a></p>
                    </div>
                </div>
                    <?php $i++; $i = ($i == 3)? 0 : $i; ?>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.footer')

</div>
@endsection


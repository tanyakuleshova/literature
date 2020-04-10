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
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
{{--                            <a href="/" class="text-cursive h5 text-red">На головну</a>--}}
                            <h1 class="mb-3 font-weight-bold text-teal">Матеріали уроків</h1>
{{--                            <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Pricing</strong></p>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <a class="black_a" href="/lessons/classes/8_class/lessons">
                        <div class="pricing teal class_block">
                      <span class="price">
                        <span>8</span>
                      </span>
                            <div class="row justify-content-md-center">
                                <h3>Клас</h3>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="class_block">
                                    <div>Матеріали уроків</div>
                                    <div>для 8-х класів</div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <p><a href="/lessons/classes/8_class/lessons" class="btn btn-teal btn-custom-1 mt-4">Далі</a></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a class="black_a" href="/lessons/classes/9_class/lessons">
                    <div class="pricing yellow class_block">
                      <span class="price">
                        <span>9</span>
                      </span>
                        <div class="row justify-content-md-center">
                            <h3>Клас</h3>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="class_block">
                                <div>Матеріали уроків</div>
                                <div>для 9-х класів</div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <p><a href="/lessons/classes/9_class/lessons" class="btn btn-yellow btn-custom-1 mt-4">Далі</a></p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a class="black_a" href='/lessons/classes/10_class/lessons'>
                            <div class="pricing green class_block">
                              <span class="price">
                                <span>10</span>
                              </span>
                                <div class="row justify-content-md-center">
                                    <h3>Клас</h3>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="class_block">
                                        <div>Матеріали уроків</div>
                                        <div>для 10-х класів</div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <p><a href="/lessons/classes/10_class/lessons" class="btn btn-green btn-custom-1 mt-4">Далі</a></p>
                                </div>
                            </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
        @include('layouts.footer')
</div>

@endsection


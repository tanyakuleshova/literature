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

        <div class="site-section-cover overlay">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-md-5 mt-5 pt-5 header-title">
                        <span class="text-cursive h5 text-red">Вітаємо на сайті!</span>
                        <h1 class="mb-3 font-weight-bold text-teal">Діалог</h1>
{{--                        <p></p>--}}
{{--                        <p class="mt-5"><a href="#" class="btn btn-primary py-4 btn-custom-1">Learn More</a></p>--}}
                    </div>
                    <div class="col-md-6 ml-auto align-self-end">
{{--                        <img src="images/bg.png" alt="Image" class="img-fluid">--}}

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-md-0">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 ml-auto pl-md-5">
{{--                    <span class="text-cursive h5 text-red">About Us</span>--}}
                    <h3 class="text-black">Вітаю, дорогий друже!</h3>
                    <div style="text-align: justify">
                    <p>Ти зайшов на сайт дистанційного навчання із зарубіжної літератури і мистецтва.
                    Час диктує нові  умови життя.  І я вірю, що для творчого читача відстань не стане на заваді!
                    «Діалог» стане твоїм помічником у нелегкій подорожі до інших країн і епох. Адже дистанційне навчання вимагає справжньої праці – інтелектуальної і духовної.
                    Проте, винагорода  за всі труднощі – безцінні скарби морального і естетичного  досвіду, який збагатить твій внутрішній світ.</p>
                    <p>Сайт складається з декількох блоків: інформаційний (текстовий матеріал уроку, презентації, або відеоматеріалу), практичний (опрацювання матеріалу і виконання тестових робіт, або творчих), зворотній зв’язок (аналіз виконаних робіт, відповіді вчителя на запитання, що виникнуть у тебе  в процесі   роботи з матеріалом)
                    І додатковий розділ «Помічник», в якому ти зможете переглянути алгоритм виконання того чи іншого завдання.</p>
                    <p>А вести діалог буде твій учитель -  Кулєшова Любов Василівна</p>
                    </div>

{{--                    <p class="mt-5"><a href="#" class="btn btn-warning py-4 btn-custom-1">More About Us</a></p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <a href="/lessons/classes">
                        <div class="block-2 yellow">
                              <span class="wrap-icon">
                                <span class="icon-person"></span>
                              </span>
                            <h2>Матеріали уроків</h2>
                            {{--                            <img class="img_main_bloks" src="{{asset('images/books.png')}}" alt="">--}}
                            <p>Уважно ознайомся з матеріалами, відповідай на поточні запитання.</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="/homeworks/classes">
                        <div class="block-2 red">
                          <span class="wrap-icon">
                            <span class="icon-home"></span>
                          </span>
                            <h2>Домашні завдання</h2>
                            <p>Виконуй тільки після ознайомлення з матеріалами уроку.</p>
                            {{--                        <img class="img_main_bloks" src="{{asset('images/apple.png')}}" alt="">--}}
                        </div>
                    </a>
                </div>


                <div class="col-lg-4">
                    <a href="/testing/classes">
                        <div class="block-2 teal">
                          <span class="wrap-icon">
                            <span class="icon-cog"></span>
                          </span>
                            <h2>Тести</h2>
                            {{--                            <img class="img_main_bloks" src="{{asset('images/books.png')}}" alt="">--}}
                            <p>Перевір себе. Одна спроба, за визначений час.</p>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="text-black">Твій помічник</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="testimonial-3-wrap">

                        <div class="owl-carousel nonloop-block-13">
                            <div class="testimonial-3 d-flex helper_block">
                                <div>
                                    <img src="images/helper/1.png" alt="Image" class="helper_img vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3></h3>
                                    <p class="position"></p>
                                    <p><strong>Логотип до художнього твору</strong> – оригінальне графічне зображення, пов’язане з конкретним текстом, виготовлене з рекламною метою.</p>
                                </div>
                            </div>
                            <div class="testimonial-3 d-flex helper_block">
                                <div>
                                    <img src="images/helper/3.png" alt="Image" class="helper_img vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3></h3>
                                    <p class="position"></p>
                                    <p><strong>Малюнок</strong>– візуалізатор допоможе пердати наші думки і відчуття зоровими образами.</p>
                                </div>
                            </div>
                            <div class="testimonial-3 d-flex helper_block">
                                <div>
                                    <img src="images/helper/5.png" alt="Image" class="helper_img vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3></h3>
                                    <p class="position"></p>
                                    <p><strong>Мотиватор (рекламний плакат)</strong> – наочная агітація, що надихає.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="site-section py-5 bg-warning">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12 d-flex">--}}
{{--                    <h2 class="text-white m-0">Bring Fun Life To Your Kids</h2>--}}
{{--                    <a href="#" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Get Started</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    @include('layouts.footer')
</div>


@endsection

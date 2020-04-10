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
                        <span class="text-cursive h5 text-red">Gallery</span>
                        <h1 class="mb-3 font-weight-bold text-teal">Gallery Of Kids</h1>
                        <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Gallery</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">Our Gallery</span>
                    <h2 class="text-black">Gallery Of The Kids</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <a href="images/img_1.jpg" data-fancybox="gal"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="images/img_2.jpg" data-fancybox="gal"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="images/img_3.jpg" data-fancybox="gal"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="images/img_4.jpg" data-fancybox="gal"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="images/img_5.jpg" data-fancybox="gal"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="images/img_2.jpg" data-fancybox="gal"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="images/img_2.jpg" data-fancybox="gal"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>





    <div class="site-section py-5 bg-warning">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex">
                    <h2 class="text-white m-0">Bring Fun Life To Your Kids</h2>
                    <a href="#" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Get Started</a>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-3">About Us</h2>
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                    <h2 class="footer-heading mb-4">Newsletter</h2>
                    <form action="#" class="d-flex" class="subscribe">
                        <input type="text" class="form-control mr-3" placeholder="Email">
                        <input type="submit" value="Send" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="row">
                        <div class="col-lg-4 ml-auto">
                            <h2 class="footer-heading mb-4">Navigation</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="footer-heading mb-4">Navigation</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>

                        </div>



                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>
@endsection


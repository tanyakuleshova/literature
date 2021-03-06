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
                        <span class="text-cursive h5 text-red">Contact</span>
                        <h1 class="mb-3 font-weight-bold text-teal">Get In Touch</h1>
                        <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Contact</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Get In Touch Using The Contact Form</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5" >
                    <form action="#" method="post">
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Address:</span>
                                <span>34 Street Name, City Name Here, United States</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">Testimonial</span>
                    <h2 class="text-black">What Our Client Says About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="testimonial-3-wrap">


                        <div class="owl-carousel nonloop-block-13">
                            <div class="testimonial-3 d-flex">
                                <div class="vcard-wrap mr-5">
                                    <img src="images/person_1.jpg" alt="Image" class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Jeff Woodland</h3>
                                    <p class="position">Partner</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                </div>
                            </div>

                            <div class="testimonial-3 d-flex">
                                <div class="vcard-wrap mr-5">
                                    <img src="images/person_3.jpg" alt="Image" class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Jeff Woodland</h3>
                                    <p class="position">Partner</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                </div>
                            </div>

                            <div class="testimonial-3 d-flex">
                                <div class="vcard-wrap mr-5">
                                    <img src="images/person_2.jpg" alt="Image" class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Jeff Woodland</h3>
                                    <p class="position">Partner</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                </div>
                            </div>
                        </div>

                    </div>
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


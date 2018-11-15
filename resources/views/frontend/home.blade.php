

@extends('frontend/header')
@section('page') Home @endsection



    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
                <div class="banner-content col-lg-12 col-md-12">
                    <h1 class="text-uppercase">
                        IT Solutions
                    </h1>
                    <div class="search-field">
                        <form class="search-form" action="#">
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                                    <div class="row">
                                        <!--
                                        <div class="col">
                                            <h4 class="search-title">Search Properties For</h4>
                                        </div>
                                           --->

                                        <div class="col">
                                            <div class="onoffswitch3 d-block mx-auto">
                                                <!--  <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
                                                   <label class="onoffswitch3-label" for="myonoffswitch3">
                                                              <span class="onoffswitch3-inner">
                                                                  <span class="onoffswitch3-active">
                                                                      <span class="onoffswitch3-switch">Sell</span>
                                                                      <span class="lnr lnr-arrow-right"></span>
                                                                  </span>
                                                                  <span class="onoffswitch3-inactive">
                                                                      <span class="lnr lnr-arrow-left"></span>
                                                                      <span class="onoffswitch3-switch">Rent</span>
                                                                  </span>
                                                              </span>

                                                  </label>
                                                  --->

                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-xs-6">
                                      <select name="location" class="app-select form-control" required>
                                          <option data-display="Choose locations">Choose locations</option>
                                          <option value="1">Dhaka</option>
                                          <option value="2">Rangpur</option>
                                          <option value="3">Bogra</option>
                                      </select>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-xs-6">
                                      <select name="property-type" class="app-select form-control" required>
                                          <option data-display="Property Type">Property Type</option>
                                          <option value="1">Property type 1</option>
                                          <option value="2">Property type 2</option>
                                          <option value="3">Property type 3</option>
                                      </select>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-xs-6">
                                      <select name="bedroom" class="app-select form-control" required>
                                          <option data-display="Bedrooms">Bedrooms</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-xs-6">
                                      <select name="bedroom" class="app-select form-control" required>
                                          <option data-display="Bedrooms">Bedrooms</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <!-------
                                  <div class="col-lg-4 range-wrap">
                                      <p>Price Range:</p>
                                      <input type="text" id="range" value="" name="range" />
                                  </div>
                                  <div class="col-lg-4 range-wrap">
                                      <p>Area Range(sqm):</p>
                                      <input type="text" id="range2" value="" name="range" />
                                  </div>

                                  ----->

                                <div class="col-lg-4 d-flex justify-content-end">
                                    <button class="primary-btn mt-50" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Why we are the best</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->




<!-- Start property Area -->
<section class="property-area section-gap relative" id="property">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Our Top Rated Properties</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s1.jpg" alt="">
                        <span>For Sale</span>
                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">04 Bed Duplex</a></h4>
                            <h4>$3.5M</h4>
                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">
                                <p>Bed: 04</p>
                                <p>Bath: 03</p>
                                <p>Area: 750sqm</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p>Pool: <span class="gr">Yes</span></p>
                                <p>Internet: <span class="rd">No</span></p>
                                <p>Cleaning: <span class="rd">No</span></p>
                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s2	.jpg" alt="">
                        <span>For Sale</span>
                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">04 Bed Duplex</a></h4>
                            <h4>$3.5M</h4>
                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">
                                <p>Bed: 04</p>
                                <p>Bath: 03</p>
                                <p>Area: 750sqm</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p>Pool: <span class="gr">Yes</span></p>
                                <p>Internet: <span class="rd">No</span></p>
                                <p>Cleaning: <span class="rd">No</span></p>
                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s3.jpg" alt="">
                        <span>For Sale</span>
                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">04 Bed Duplex</a></h4>
                            <h4>$3.5M</h4>
                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">
                                <p>Bed: 04</p>
                                <p>Bath: 03</p>
                                <p>Area: 750sqm</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p>Pool: <span class="gr">Yes</span></p>
                                <p>Internet: <span class="rd">No</span></p>
                                <p>Cleaning: <span class="rd">No</span></p>
                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End property Area -->



<!-- Start About Area -->
<section class="about-area">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 about-left">
                <div class="single-about pb-30">
                    <h4>Why Choose Us</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="single-about pb-30">
                    <h4>Our Properties</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="single-about">
                    <h4>legal notice</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 about-right no-padding">
                <img class="img-fluid" src="/reality/assets/img/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start contact-info Area -->
<section class="contact-info-area section-gap">
    <div class="container">
        <div class="row">
            <div class="single-info col-lg-3 col-md-6">
                <h4>Visit Our Office</h4>
                <p>
                    56/8, bir uttam qazi nuruzzaman
                    road, west panthapath, kalabagan,
                    Dhanmondi, Dhaka - 1205
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Let’s call us</h4>
                <p>
                    Phone 01: 012-6532-568-9746 <br>
                    Phone 02: 012-6532-568-9748 <br>
                    FAX: 02-6532-568-746
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Let’s Email Us</h4>
                <p>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec8489808083ac8f8380839e80858ec28f8381">itsolutions@itsolutions.com</a> <br>

                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Customer Support</h4>
                <p>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="24575154544b565064474b484b56484d460a474b49">customersupport@itsolutions.com</a> <br>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End contact-info Area -->

<!-- Start Contact Area -->

<!-- End Contact Area -->
@extends('frontend/footer')
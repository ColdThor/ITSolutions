@include('frontend/header')
@include('frontend/chat')
@section('page') Užitočné informácie @endsection

<div align="center">

    <!-- Start informacie Area -->
    <section class="service-area section-gap" id="about">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">

                    <h1>Užitočné informácie</h1>
                    <br/><br/>
                </div>
            </div>
            <div class="row" >

                <div class="col-lg-4 col-md-6 pb-30" href="<?php echo url('/zmluvy'); ?>">
                    <a href="<?php echo url('/zmluvy'); ?>"style="color: #0a0a0a">
                        <div class="single-service" >
                            <h4><span class="lnr lnr-book" ></span>Zmluvy</h4>
                            <p>
                                Všetky potrebné zmluvy máme pre Vás nachystané na jednom mieste.

                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30" href="<?php echo url('/poradenstvo'); ?>">
                    <a href="<?php echo url('/poradenstvo'); ?>"style="color: #0a0a0a">

                        <div class="single-service">
                            <h4><span class="lnr lnr-users"></span>Poradenstvo </h4>
                            <p>
                                V prípade, že máte nejakú otázku, registrovaný právnici Vám poskytnú kvalifikovaný právny názor.

                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="<?php echo url('/hypoteky'); ?>" style="color: #0a0a0a">
                        <div class="single-service">
                            <h4><span class="lnr lnr-layers" ></span> Hypotéky </h4>

                            <p>
                                Všetky informácie o hypotékach na jednom mieste!

                            </p>
                        </div>
                    </a>
                </div>
                <h3>Potrebujete poradiť s niečím iným ako sú informácie v hore uvedených sekciách?<br> Tak neváhajte a kontaktujte nás pomocou chatu, ktorý sa nachádza v pravom dolnom rohu.</h3>
            </div>
        </div>
    </section>

    <!-- End informacie Area -->


</div>
<br /> <br />
<br /> <br /><br /> <br />
<br /> <br /><br /><br /><br /><br /><br /><br />
@include('frontend/footer')
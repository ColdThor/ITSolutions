

@include('frontend/header')

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
                    <form method="get" class="search-form" action="{{  action('HomeController@search')  }}">
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


                                        </div>
                                    </div>

                                </div>




                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select  name="location" class="app-select form-control">
                                    <option value="" data-display="Miesto">Miesto</option>

                                <?php foreach($location as $lo):  ?>


                                <!--
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
-->
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select name="type" class="app-select form-control" >
                                    <option value="" data-display="Typ nehnuteľnosti">Typ</option>
                                    <?php foreach($type as $tp):  ?>

                                    <option  value="{{$tp->id_type}}">{{$tp->title}}</option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select name="specification" class="app-select form-control" >
                                    <option value="" data-display="Druh nehnuteľnosti">Druh</option>
                                    <?php foreach($specification as $sp):  ?>
                                <!--
                                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                    -->
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select name="condition" class="app-select form-control" >
                                    <option value="" data-display="Stav nehnuteľnosti">Stav</option>
                                    <?php foreach($condition as $con):  ?>

                                    <option  value="{{$con->id_condition}}">{{$con->title}}</option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select name="user" class="app-select form-control" >
                                    <option value="" data-display="Inzerujúci">Typ inzerujúceho</option>
                                    <?php foreach($user as $us):
                                    if($us->title != "admin"):?>

                                    <option  value="{{$us->id_user_group}}">{{$us->title}}</option>
                                    <?php endif; endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select name="area" class="app-select form-control" >
                                    <option value="" data-display="Výmera">Výmera do</option>
                                    <option value="1">do 20 m2</option>
                                    <option value="2">20 až 30 m<sup>2</sup></option>
                                    <option value="3">30 až 40 m2</option>
                                    <option value="4">40 až 50 m2</option>
                                    <option value="5">50 a viac m2</option>
                                </select>
                            </div>
                            <!-- -->
                            <br />
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <input type="number" class="app-select form-control" value="" name="cena_od" placeholder="Cena od" style="height: 42px"></input>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <input type="number" class="app-select form-control" value="" name="cena_do" placeholder="Cena do"  style="height: 42px"></input>
                            </div>
                            <button type="submit" class="primary-btn mt-50" name="submit" style="height: 45px; margin-left: 900px" value="submit">Hľadať<span class="lnr lnr-arrow-right"></span></button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start service Area -->
<section class="service-area section-gap" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Sme najlepší na trhu</h1>
                <p>
                    Prečo použiť našu platformu?
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-user"></span>Sprostredkovanie bezkonkurenčných služieb</h4>
                    <p>
                        Ako novátorská rezidenčná realitná firma posilňujeme realitný trh, aby naši klienti mali dostatok prostriedkov na poradenstvo svojim klientom.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-license"></span>Profesionálne služby</h4>
                    <p>
                        Byť leader na trhu vyžaduje najchytrejšie nástroje postavené tou najjasnejšou mysľou v oblasti inžinierstva, dizajnu a stratégie akou ITSolutions disponuje.


                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-phone"></span>Najlepšia podpora</h4>
                    <p>
                        S riadeným prístupom ku klientom je ITSolutions sofistikovanou budúcnosťou nehnuteľností.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-rocket"></span>Technické zručnosti</h4>
                    <p>
                        Používanie internetu sa stáva čoraz častejším v dôsledku rýchleho pokroku technológie aj v oblasti nehnuteľností.

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-diamond"></span>Prémiové produkty</h4>
                    <p>
                        To najlepšie čo Slovenský realitný trh ponúka vďaka naším partnerom inzerujeme na našej platforme. Spoľahnite sa na ITSolutions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-bubble"></span>Pozitívne hodnotenie</h4>
                    <p>
                        Tisícky spokojných klientov radia ITSolutions medzi lídrov v oblasti realitného developmentu na Slovensku.
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
                <h1>Naše odporúčané nehnuteľnosti</h1>
                <p>
                    Vybrali sme pre Vás zaujímavé nehnuteľnosti.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s1.jpg" alt="">
                        <span>Na predaj</span>
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

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s2	.jpg" alt="">
                        <span>Na predaj</span>
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

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-property">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s3.jpg" alt="">
                        <span>Na predaj</span>
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
                    <h4>Prečo si vybrať nás?</h4>
                    <p>
                        Lebo poskytujeme najviac informácii na jednom mieste pre spokojnosť klientov.
                    </p>
                </div>
                <div class="single-about pb-30">
                    <h4>Naše produkty</h4>
                    <p>
                        Získavanie informácii o realitách zo všetkých dostupných zdrojov v rámci celého Slovenska.
                    </p>
                </div>
                <div class="single-about">
                    <h4>Co-working tímu </h4>
                    <p>
                        Kontaktujeme odborníkov na reality z celoslovenskej siete nehnuteľností.
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
<section class="contact-info-area section-gap" id="contact">
    <div class="container">
        <div class="row">
            <div class="single-info col-lg-3 col-md-6">
                <h4>Navštívte nás </h4>
                <p>
                    Tr. Andreja Hlinku 1,  Nitra 94901, <br>
                    Slovenská Republika
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Zavolajte nám</h4>
                <p>
                    TEL: +$21 0902 000 000 <br>
                    FAX: 02-6532-568-746
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Napíšte nám email</h4>
                <p>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec8489808083ac8f8380839e80858ec28f8381">itsolutions@itsolutions.com</a> <br>

                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Kontaktujte podporu</h4>
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
@include('frontend/footer')


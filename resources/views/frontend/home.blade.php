@include('frontend/header')
@section('page') Home @endsection
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center mt-25" style="height: 915px;">
            <div class="banner-content col-lg-12 col-md-12">
                <div class="search-field">
                    <form method="get" class="search-form" action="{{  action('HomeController@search')  }}">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                                <div class="row">
                                    <h2>Parametre hľadanej nehnuteľnosti</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <select  name="location" class="app-select form-control">
                                    <?php $i = 0; foreach($ban as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($bra as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($kos as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($nit as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($pre as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($tre as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($trn as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($zil as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$lo->region}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
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
                                    <?php $i = 0; foreach($byty as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($domy as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($objekty as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($pozemky as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($priestory as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
                                    <?php endforeach; ?>

                                    <?php $i = 0; foreach($rek as $sp): $i++; ?>
                                    <?php if($i==1): ?>
                                    <option value=""  style="font-weight: bold" data-display="Miesto">{{$sp->group}}</option>
                                    <?php endif; ?>
                                    <option  value="{{$sp->id_location}}">{{$sp->title}}</option>
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
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <div class="row">
                                    <button type="submit" class="primary-btn mt-10" name="submit" value="submit">Hľadať<span class="lnr lnr-arrow-right"></span></button>
                                </div>
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
<section class="property-area section-gap relative" >
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


<!-- Start contact-info Area -->
<section class="about-area section-gap" id="contact">
    <div class="container">
        <div class="row">
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <h4>Adresa</h4>
                <p class="single-info">
                    Tr. Andreja Hlinku 1,  Nitra 94901, <br>
                    Slovenská Republika
                </p>
            </div>
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <h4>Kontakt</h4>
                <p>
                    Tel.: +421 918 157 419<br>
                    Email: <a href="mailto:info@svetrealit.sk" target="_top">info@svetrealit.sk</a>
                </p>
            </div>
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <div class="single-footer-widget ">
                    <h4>Newsletter</h4>
                    <p>Prihláste sa na odber aktuálnych<br>
                        noviniek zo sveta realít.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Zadať email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zadajte email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-info Area -->



@include('frontend/footer')



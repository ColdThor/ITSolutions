@include('frontend/header')
@include('frontend/chat')
@section('page') Home @endsection
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
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
                                <select multiple="multiple" name="location" class="location">
                                    <?php $i = 0; foreach($ban as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

                                    <?php $i = 0; foreach($bra as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

                                    <?php $i = 0; foreach($kos as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

                                    <?php $i = 0; foreach($nit as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

                                    <?php $i = 0; foreach($pre as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>


                                    <?php $i = 0; foreach($tre as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

                                    <?php $i = 0; foreach($trn as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>


                                    <?php $i = 0; foreach($zil as $lo): $i++; ?>
                                    <?php if($i==1): ?>
                                        <optgroup label="{{$lo->region}}">
                                    <?php endif; ?>
                                    <option  value="{{$lo->id_location}}">{{$lo->city}}</option>
                                    <?php endforeach; ?>
                                        </optgroup>

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
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <input type="number" class="app-select form-control" value="" name="cena_od" placeholder="Cena od" style="height: 38px"></input>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-6">
                                <input type="number" class="app-select form-control" value="" name="cena_do" placeholder="Cena do"  style="height: 38px"></input>
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
            <div class="col-md-8 pt-30 pb-40 header-text">
                <h2>Naša vízia modernej inzercie</h2>
            </div>
        </div>
        <div class="row pb-20">
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-layers"></span>Inovatívne technológie</h4>
                    <p>
                        Sme novátorský portál s cieľom prepojiť moderné technológie s realitným trhom,
                        aby vaša cesta naším svetom realít bola jedinečným zážitkom.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-magnifier"></span>Mapovanie realitného trhu</h4>
                    <p>
                        Neustále monitorujeme trh, aby sme vám poskytli komfort, pri ktorom u nás
                        nájdete čo najširšie portfólio zhromaždených inzerátov na jednom mieste.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-bookmark"></span>Podpora a poradenstvo</h4>
                    <p>
                        Spájame špecialistov z oblasti realít a technológií pre poskytnutie kvalitného
                        právneho poradenstva a promptnej technickej podpory.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->

<!-- Start property Area -->
<section class="property-area-home section-gap relative" >
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12 pt-10 pb-40 header-text">
                <h2 class="top-offers pb-10">Najsledovanejšie ponuky</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==1):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>"> {{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Koniec 1 casti-->
            <div class="col-lg-4 col-md-6">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==2):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>"> {{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Koniec 2 casti-->
            <div class="col-lg-4 col-md-6">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==3):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">{{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Koniec 3 casti-->
            <div class="col-lg-4 col-md-6">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==4):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">{{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Koniec 4 casti-->

            <div class="col-lg-4 col-md-4">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==5):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>" style="color: black">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">{{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Koniec 5 casti-->

            <div class="col-lg-4 col-md-6">
                <div class="single-prop">
                    <?php
                    $i = 0;
                    foreach ($top as $realita):
                    $i++;
                    if($i==6):?>
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $realita->id_advertisement ?>/fotka_1.png">
                        </a>
                        <span><strong>Lokalita: </strong><?php echo $realita->location ?></span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$realita->id_advertisement.'/false'); ?>">{{$realita->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$realita->price}}€</b></p>
                            <p><span class="lnr lnr-history"></span><b>{{$realita->date}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Koniec 6. inzeratu-->
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="row">
                    <a type="a"  href="<?php echo url('/search_all'); ?>" class="genric-btn default circle mt-20">Zobraziť všetky inzeráty</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End property Area -->
@include('frontend/footer')



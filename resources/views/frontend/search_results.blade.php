@include('frontend/header')
@include('frontend/chat')
@section('page') Inzeráty @endsection

<section class="property-area section-gap relative">
    <div class="container pt-30">
        <div class="row pt-20">
            <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                <h2>Výsledky hľadania</h2>
            </div>
        </div>

        <style>
            .location {
                display: none;
            }
            .specification {
                display:none;
            }
            .inzeraty {
                display: none;
                cursor: default;
            }

            .click {
                cursor: pointer;
            }



        </style>




        <div class="search-field">
            <form method="post" class="search-form" action="{{  action('HomeController@search')  }}">


                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                        <div class="row">
                            <h2>Parametre hľadanej nehnuteľnosti</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <select multiple="multiple" name="location[]" class="location" id="location">
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
                        <select name="type" class="app-select form-control type" id="type" >
                            <option value="" data-display="Typ nehnuteľnosti">Typ</option>
                            <?php foreach($type as $tp):  ?>

                            <option  value="{{$tp->id_type}}">{{$tp->title}}</option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <select  multiple="multiple" name="specification[]" class="app-select form-control specification" id="specification" >
                            <?php $i = 0; foreach($byty as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>

                            <?php $i = 0; foreach($domy as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>


                            <?php $i = 0; foreach($objekty as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>

                            <?php $i = 0; foreach($pozemky as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>


                            <?php $i = 0; foreach($priestory as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>

                            <?php $i = 0; foreach($rek as $sp): $i++; ?>
                            <?php if($i==1): ?>
                            <optgroup label="{{$sp->group}}">
                                <?php endif; ?>
                                <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <select name="condition" class="app-select form-control condition" id="condition" >
                            <option value="" data-display="Stav nehnuteľnosti">Stav</option>
                            <?php foreach($condition as $con):  ?>

                            <option  value="{{$con->id_condition}}">{{$con->title}}</option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <select name="user" class="app-select form-control user" id="user">
                            <option value="" data-display="Inzerujúci">Typ inzerujúceho</option>
                            <?php foreach($user as $us):
                            if($us->title != "admin"):?>

                            <option  value="{{$us->id_user_group}}">{{$us->title}}</option>
                            <?php endif; endforeach; ?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <select name="area" class="app-select form-control area " id="area">
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
                        <input type="number" class="app-select form-control cena_od" id="cena_od" value="" name="cena_od" placeholder="Cena od" style="height: 38px"></input>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <input type="number" class="app-select form-control cena_do" id="cena_do" value="" name="cena_do" placeholder="Cena do"  style="height: 38px"></input>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <button type="submit" class="primary-btn mt-10" name="submit" value="submit">Hľadať<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>


        <div class="row">
            <?php  $i=0; ?>
            @if(session()->has('search'))
                <?php $search = session()->get('search');

                foreach($search as $ads):
                $fotka = $ads->id_advertisement;
                $i++; ?>
            <div class="col-lg-6">
                <div class="single-property">
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $fotka ?>/fotka_1.png" alt="">
                        </a>
                        <span>{{$ads->type}} </span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>"> {{$ads->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$ads->price}}€</b></p>
                            <p><span class="lnr lnr-crop"></span>Výmera: <b>{{$ads->area}}m<sup>2</sup></b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-map-marker"></span>Poloha: <b>{{$ads->location}}</b></p>
                            <p><span class="lnr lnr-history"></span>Pridané: <b>{{$ads->date}}</b></p>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>



            @else
                <script>
                    document.location.href="{!! route('search_all'); !!}";
                </script>
            @endif
        </div>


   <?php if($i==0): ?>
    <div class="col-md-8 pt-30 pb-40 header-text" style="margin-left: 15%">
        <h2>Nenašli sa žiadne inzeráty podľa kritérií hľadania</h2>
    </div>
<?php endif; ?>


<br />
<!-- CRAWLER -->
    <div class="click" onclick="showDiv()">
        <a style="color: #000" class="genric-btn default circle arrow">Inzeráty od zmluvných partnerov</a>

        <div style="color: black" class="inzeraty" id="traitor">

            <div class="row">
            <?php
            $i = 0;
            foreach ($miesto as $m): ?>
                <div class="col-lg-6">
                <div class="single-property">
                    <div class="images">
                        <image class="" src="{{$image[$i]}}"></image>
                    </div>
                    <div class="desc-crawler">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="{{$link[$i]}}">{{$nazov[$i]}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena/Výmera: <b><?php echo $cena[$i]; ?></b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-map-marker"></span><b>{{$m}}</b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-history"></span>Druh:<b>{{$druh[$i]}}</b></p>
                        </div>
                    </div>
                </div>
                </div>
                <?php
                $i++;
                endforeach; ?>

            </div>
        </div>
    </div>

    <!-- CRAWLER -->
        </div>
</section>


<script type="text/javascript">
    function showDiv() {
        if( document.getElementById('traitor').style.display === "block") {

        } else {
            document.getElementById('traitor').style.display = "block";
        }

    }
</script>



@include('frontend/footer')
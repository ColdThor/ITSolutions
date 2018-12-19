@include('frontend/header')
@include('frontend/chat')
@section('page') Pridať inzerát @endsection



<div class="container pt-70">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
            <div class="generic-banner-content">
                <h3 class="text-center hh">Pridať inzerát</h3>
                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <h5>Položky označené s <b>*</b> sú povinné.</h5>
                    </div>
                </div>
                {{ Form::open(array('url' => '/pridat', 'files' => true)) }}
                <div class="input-group-icon mt-30">
                    <div class="icon"><i class="fa fa-font" aria-hidden="true"></i></div>
                    <input type="text" name="title" placeholder="Nadpis inzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nadpis inzerátu *'" required class="single-input-accent">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-align-left" aria-hidden="true"></i></div>
                    <textarea class="menu-textarea mt-10" name="description" placeholder="Popis inzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Popis nzerátu *'" required></textarea>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input type="email" name="contact_mail" placeholder="Email *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email *'" required class="single-input-accent">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <input type="text" name="contact_phone" placeholder="Telefónne číslo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefónne číslo'" class="single-input-accent">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                    <input type="number" name="area" placeholder="Výmera v m² *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Výmera v m² *'" required class="single-input-accent">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-euro" aria-hidden="true"></i></div>
                    <input type="nuber" name="price" placeholder="Cena v € *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cena v € *'" required class="single-input-accent">
                </div>
                <?php if(!session()->has('userID')): ?>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <input type="text" name="first_name" placeholder="Meno zadávateľa *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Meno zadávateľa *'" required class="single-input-accent">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <input type="text" name="last_name" placeholder="Priezvisko zadávateľa *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Priezvisko zadávateľa *'" required class="single-input-accent">
                </div>
                <?php endif?>

                <h5 class="mt-20">Lokalita: <b>*</b></h5>
                <select name="location" class="app-select form-control mt-05" required>
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

                <h5 class="mt-20">Druh nehnuteľnosti: <b>*</b></h5>
                <select name="specification" class="app-select form-control mt-05" required>
                    <?php $i = 0; foreach($byty as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>

                    <?php $i = 0; foreach($domy as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>

                    <?php $i = 0; foreach($objekty as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>

                    <?php $i = 0; foreach($pozemky as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>

                    <?php $i = 0; foreach($priestory as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>

                    <?php $i = 0; foreach($rek as $sp): $i++; ?>
                    <?php if($i==1): ?>
                    <option value=""  style="font-weight: bold" data-display="Druh">{{$sp->group}}</option>
                    <?php endif; ?>
                    <option  value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endforeach; ?>
                </select>

                <h5 class="mt-20">Stav nehnuteľnosti: <b>*</b></h5>
                <select name="condition" class="app-select form-control mt-05" required>
                    <?php foreach ($condition as $cd): ?>
                    <option value={{$cd->id_condition}}>{{$cd->title}}</option>
                    <?php endforeach; ?>
                </select>

                <h5 class="mt-20">Typ inzercie <b>*</b></h5>
                <select name="type" class="app-select form-control mt-05" required>
                    <?php foreach ($type as $tp): ?>
                    <option value={{$tp->id_type}}>{{$tp->title}}</option>
                    <?php endforeach; ?>
                </select>

                <h5 class="mt-20">Priložiť obrázky nehnuteľnosti<b>*</b></h5>
                <div class="col-lg-12 align-items-center justify-content-center mt-05">
                    <div class="row" style="color: black">
                        {!! Form::file('fotka[]', array('multiple'=>true)) !!}
                    </div>
                </div>

                <div class="col-lg-12 d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <div class="g-recaptcha" data-sitekey="6LdscXwUAAAAAEjwe-hTuEOTCptX4bHax134Q6xZ"></div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex align-items-center justify-content-center mt-20">
                    <div class="row">
                        <input type="checkbox" name="eula" value="eula"> <h5>  Súhlasím s obchodnými podmienkami*</h5> </input>
                    </div>
                </div>

                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <button type="submit" class="primary-btn mt-25" name="submit" value="submit">Pridať inzerát<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ Form::close() }}
                <div class="d-flex align-items-center justify-content-center mt-30">
                    <div class="row">
                        <p class="sample-text">
                            <b>
                                {{ $errors->first('title') }}
                                {{ $errors->first('contact_mail') }}
                                {{ $errors->first('description') }}
                                {{ $errors->first('area') }}
                                {{ $errors->first('price') }}
                                {{ $errors->first('condition') }}
                                {{ $errors->first('specification') }}
                                {{ $errors->first('type') }}
                                {{ $errors->first('location') }}
                                {{ $errors->first('eula') }}
                                {{ $errors->first('fotka') }}
                                {{ $errors->first('g-recaptcha-response') }}
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" pb-80 "></section>


@include('frontend/footer')
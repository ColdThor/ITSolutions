@include('frontend/chat')
@include('frontend/header')
@section('page') Editovať inzerát @endsection
<div class="container pt-130">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
            <div class="generic-banner-content">
                <h3 class="text-center">Editovať inzerát</h3>
                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <h5>Položky označené s <b>*</b> sú povinné.</h5>
                    </div>
                </div>
                <form  method="post" action="{{  action('HomeController@do_editinzerat', ['id' => $ads->id_advertisement])  }}">
                    <h5 class="mt-20">Nadpis: <b>*</b></h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-font" aria-hidden="true"></i></div>
                        <input type="text" name="title"  value="{{ $ads->title }}" placeholder="Nadpis inzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nadpis inzerátu *'" required class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Popis inzerátu: <b>*</b></h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-align-left" aria-hidden="true"></i></div>
                        <textarea class="menu-textarea mt-10" name="description" placeholder="Popis inzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Popis nzerátu *'" required>{{ $ads->description }}</textarea>
                    </div>

                    <h5 class="mt-20">Email: <b>*</b></h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="email" name="contact_mail" value="{{ $ads->contact_mail }}" placeholder="Email *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email *'" required class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Telefónne číslo:</h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <input type="text" name="contact_phone" value="{{ $ads->contact_phone }}" placeholder="Telefónne číslo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefónne číslo'" class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Výmera v m²: <b>*</b></h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                        <input type="number" name="area" placeholder="Výmera v m² *" value="{{ $ads->area }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Výmera v m² *'" required class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Cena (€): <b>*</b></h5>
                    <div class="input-group-icon mt-05">
                        <div class="icon"><i class="fa fa-euro" aria-hidden="true"></i></div>
                        <input type="nuber" name="price" value="{{ $ads->price }}" placeholder="Cena v € *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cena v € *'" required class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Lokalita: <b>*</b></h5>
                    <select name="id_location" class="form-control mt-05" required>
                            <?php foreach($location as $lo):
                            if($lo->id_location == $ads->id_location): ?>
                            <option value="{{$lo->id_location}}" selected>{{$lo->city}}</option>
                            <?php else: ?>
                            <option value="{{$lo->id_location}}">{{$lo->city}}</option>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </select>

                    <h5 class="mt-20">Druh nehnuteľnosti: <b>*</b></h5>
                    <select name="id_specification" class="app-select form-control mt-05" required>
                            <?php foreach($specification as $sp):
                            if($sp->id_specification == $ads->id_specification): ?>
                            <option value="{{$sp->id_specification}}" selected>{{$sp->title}}</option>
                            <?php else: ?>
                            <option value="{{$sp->id_specification}}">{{$sp->title}}</option>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </select>

                    <h5 class="mt-20">Stav nehnuteľnosti: <b>*</b></h5>
                    <select name="id_condition" class="app-select form-control mt-05" required>
                            <?php foreach($condition as $co):
                            if($co->id_condition == $ads->id_condition): ?>
                            <option value="{{$co->id_condition}}" selected>{{$co->title}}</option>
                            <?php else: ?>
                            <option value="{{$co->id_condition}}" >{{$co->title}}</option>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </select>

                    <h5 class="mt-20">Typ inzercie <b>*</b></h5>
                    <select name="id_type" class="app-select form-control mt-05" required>
                            <?php foreach($type as $tp):
                            if($tp->id_type == $ads->id_type): ?>
                            <option value="{{$tp->id_type}}" selected>{{$tp->title}}</option>
                            <?php else: ?>
                            <option value="{{$tp->id_type}}">{{$tp->title}}</option>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </select>

                    <div class="col-lg-12 d-flex align-items-center justify-content-center mt-10">
                        <div class="row">
                            <div class="g-recaptcha" data-sitekey="6LdscXwUAAAAAEjwe-hTuEOTCptX4bHax134Q6xZ"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex align-items-center justify-content-center mt-20">
                        <div class="row">
                            <input type="checkbox" name="eula" value="eula"> <h5> Súhlasím s obchodnými podmienkami*</h5>
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <button type="submit" class="primary-btn mt-25" name="submit" value="submit">Editovať inzerát<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
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





<!-- Chrisova verzia
<div align="center">
/*

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia inzercie</h3>
                    </div>


                    <p>
                        <label for="required">Položky označené s <span style="color: red">*</span> sú povinné.</label>
                        <br />
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
                    </p>



                    <form method="post" action="{{  action('HomeController@do_editinzerat', ['id' => $ads->id_advertisement])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_advertisement" value="{{ $ads->id_advertisement }}">
                                <label for="title">Názov inzerátu<span style="color: red">*</span></label>
                                <input type="text" name="title" value="{{ $ads->title }}">
                                <br />
                                <label for="description">Popis inzerátu<span style="color: red">*</span></label>
                                <textarea id="description" name="description" >
                                    {{ $ads->description }}
                                </textarea>

                                <br />
                                <label for="contact_mail">Email<span style="color: red">*</span></label>
                                <input type="text" name="contact_mail" value="{{ $ads->contact_mail }}">
                                <br />
                                <label for="contact_phone">Tel. kontakt<span style="color: red">*</span></label>
                                <input type="text" name="contact_phone" value="{{ $ads->contact_phone }}">
                                <br />

                                <label for="id_location">Miesto<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_location">
                                        <?php foreach($location as $lo):
                                        if($lo->id_location == $ads->id_location): ?>
                                        <option value="{{$lo->id_location}}" selected>{{$lo->city}}</option>
                                        <?php else: ?>
                                        <option value="{{$lo->id_location}}">{{$lo->city}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <label for="price">Cena<span style="color: red">*</span></label>
                                <input type="number" name="price" value="{{ $ads->price }}">
                                <br />
                                <label for="area">Výmera<span style="color: red">*</span></label>
                                <input type="number" name="area" value="{{ $ads->area }}">
                                <br />

                                <label for="id_specification">Druh<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_specification">
                                        <?php foreach($specification as $sp):
                                        if($sp->id_specification == $ads->id_specification): ?>
                                        <option value="{{$sp->id_specification}}" selected>{{$sp->title}}</option>
                                        <?php else: ?>
                                        <option value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <label for="id_type">Typ<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_type">
                                        <?php foreach($type as $tp):
                                        if($tp->id_type == $ads->id_type): ?>
                                        <option value="{{$tp->id_type}}" selected>{{$tp->title}}</option>
                                        <?php else: ?>
                                        <option value="{{$tp->id_type}}">{{$tp->title}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <label for="id_condition">Stav<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_condition">
                                        <?php foreach($condition as $co):
                                        if($co->id_condition == $ads->id_condition): ?>
                                        <option value="{{$co->id_condition}}" selected>{{$co->title}}</option>
                                        <?php else: ?>
                                        <option value="{{$co->id_condition}}" >{{$co->title}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <br />

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>

                            <input type="checkbox" name="eula" value="eula"> Súhlasím s obchodnými podmienkami<span style="color: red">*</span><br>


                            <div class="g-recaptcha" data-sitekey="6LdscXwUAAAAAEjwe-hTuEOTCptX4bHax134Q6xZ"></div>



                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Editovať</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

        <!-- /.row -->
</div>

-->

@include('frontend/footer')





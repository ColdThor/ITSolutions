@include('frontend/header')
@section('page') Pridať inzerát @endsection
<div class="container pt-130">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="generic-banner-content">
                <h3 class="text-center">Pridať inzerát</h3>
                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <h5>Položky označené s <b>*</b> sú povinné.</h5>
                    </div>
                </div>
                <form  method="post" action="{{ action ('HomeController@add_advertisement') }}">
                    <div class="input-group-icon mt-30">
                        <div class="icon"><i class="fa fa-font" aria-hidden="true"></i></div>
                        <input type="text" name="title" placeholder="Nadpis inzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nadpis inzerátu *'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-align-left" aria-hidden="true"></i></div>
                        <textarea class="menu-textarea mt-10" name="description" placeholder="Popis nzerátu *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Popis nzerátu *'" required></textarea>
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
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name="first_name" placeholder="Meno zadávateľa *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Meno zadávateľa *'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name="last_name" placeholder="Priezvisko zadávateľa *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Priezvisko zadávateľa *'" required class="single-input-accent">
                    </div>

                    <h5 class="mt-20">Lokalita: <b>*</b></h5>
                    <select name="location" class="form-control mt-05" required>
                        <?php foreach ($location as $lo): ?>
                        <option value={{$lo->id_location}}>{{$lo->city}}</option>
                        <?php endforeach; ?>
                    </select>

                    <h5 class="mt-20">Druh nehnuteľnosti: <b>*</b></h5>
                    <select name="specification" class="app-select form-control mt-05" required>
                        <?php foreach ($specification as $sp): ?>
                        <option value={{$sp->id_specification}}>{{$sp->title}}</option>
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
                        <div class="row">
                            <input type="file" name="fotka[]" class="custom-file" required>
                        </div>
                    </div>

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
                            <button type="submit" class="primary-btn mt-25" name="submit" value="submit">Pridať inzerát<span class="lnr lnr-arrow-right"></span></button>
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

/*
<!-- CHrisova verzia
<br /> <br />
<br /> <br />
<br /> <br />
<div align="center">
<h1>Pridať inzerát</h1>


{{ Form::open(array('url' => '/pridat', 'files' => true)) }}


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

<p>
    <label for="title">Názov inzerátu<span style="color: red">*</span></label>
    {{ Form::text('title') }}
</p>

<p>
    <label for="description">Popis inzerátu<span style="color: red">*</span></label>
    <textarea id="description" name="description" ></textarea>
</p>


    <p>
        <label for="contact_mail">Email<span style="color: red">*</span></label>
        {{ Form::text('contact_mail') }}
    </p>



<p>
    {{ Form::label('contact_phone', 'Telefónne číslo') }}
    {{ Form::text('contact_phone') }}
</p>



    <p>
        <label for="area">Výmera v m<sup style="color: black">2</sup><span style="color: red">*</span></label>
        {{ Form::number('area') }}
    </p>

    <p>
        <label for="price">Cena v €<span style="color: red">*</span></label>
        {{ Form::number('price') }}
    </p>


    <p>
        <label for="location">Miesto<span style="color: red">*</span></label>
        <select name="location">
            <?php foreach ($location as $lo): ?>
            <option value={{$lo->id_location}}>{{$lo->city}}</option>
            <?php endforeach; ?>
        </select>
    </p>

    <p>
        <label for="specification">Druh<span style="color: red">*</span></label>
        <select name="specification">
            <?php foreach ($specification as $sp): ?>
            <option value={{$sp->id_specification}}>{{$sp->title}}</option>
            <?php endforeach; ?>
        </select>
    </p>


    <p>
        <label for="type">Typ<span style="color: red">*</span></label>
        <select name="type">
            <?php foreach ($type as $tp): ?>
            <option value={{$tp->id_type}}>{{$tp->title}}</option>
            <?php endforeach; ?>
        </select>
    </p>



    <p>
        <label for="condition">Stav<span style="color: red">*</span></label>
        <select name="condition">
            <?php foreach ($condition as $cd): ?>
            <option value={{$cd->id_condition}}>{{$cd->title}}</option>
            <?php endforeach; ?>
        </select>
    </p>



    <?php if(!session()->has('userID')): ?>

    <p>
        <label for="first_name">Meno zadávateľa<span style="color: red">*</span></label>
        {{ Form::text('first_name') }}
    </p>

    <p>
        <label for="last_name">Priezvisko zadávateľa<span style="color: red">*</span></label>
        {{ Form::text('last_name') }}
    </p>
    <?php endif?>


    <label for="fotka[]" style="margin-left: 100px">Fotky<span style="color: red">*</span></label>

    {!! Form::file('fotka[]', array('multiple'=>true)) !!}
    <br />


    <input type="checkbox" name="eula" value="eula"> Súhlasím s obchodnými podmienkami<span style="color: red">*</span><br>


    <div class="g-recaptcha" data-sitekey="6LdscXwUAAAAAEjwe-hTuEOTCptX4bHax134Q6xZ"></div>




<p style="margin-left: 10px">{{ Form::submit('Pridať inzerát',array('class'=>'primary-btn mt-50')) }}</p>
{{ Form::close() }}



</div>

-->
*/

@include('frontend/footer')

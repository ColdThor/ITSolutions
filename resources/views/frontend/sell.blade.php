@include('frontend/header')

@section('page') Pridať inzerát @endsection
<br /> <br />
<br /> <br />
<div align="center">
<h1>Pridať inzerát</h1>


{{ Form::open(array('url' => '/pridat', 'files' => true)) }}


<!-- if there are login errors, show them here -->
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

@include('frontend/footer')

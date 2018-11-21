@include('frontend/header')

@section('page') Prihlásenie @endsection
<br /> <br />
<br /> <br />
<div align="center">
<h1>Prihlásenie </h1>
    {{ Form::open(array('url' => '/user/login')) }}


    <!-- if there are login errors, show them here -->
    <p>
        {{ $errors->first('no') }}
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>

    <p>
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email'), array('placeholder' => '@')) }}
    </p>

    <p>
        {{ Form::label('password', 'Heslo') }}
        {{ Form::password('password') }}
    </p>

    <p style="margin-left: 10px">{{ Form::submit('Prihlásiť sa',array('class'=>'btn btn-primary')) }}</p>
    {{ Form::close() }}
    <a href="<?php echo url('/user/register'); ?>">Zaregistrovať sa</a>

    <br />
</div>
<br /> <br />
<br /> <br />
@include('frontend/footer')
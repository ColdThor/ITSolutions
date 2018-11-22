@include('frontend/header')

@section('page') Registrácia @endsection

<br /> <br />
<br /> <br />
<div align="center">
<h1>Registrácia</h1>

    {{ Form::open(array('url' => '/user/register', 'files' => true)) }}


    <!-- if there are login errors, show them here -->
    <p>
        <label for="required">Položky označené s <span style="color: red">*</span> sú povinné.</label>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>

    <p>
        <label for="first_name">Meno / Názov realitnej kancelárie<span style="color: red">*</span></label>
        {{ Form::text('first_name') }}
    </p>

    <p>
        <label for="last_name">Priezvisko</label>
        {{ Form::text('last_name') }}
    </p>


    <p>
        <label for="email">Email<span style="color: red">*</span></label>
        {{ Form::text('email') }}
    </p>



    <p>
        {{ Form::label('telephone', 'Telefónne číslo') }}
        {{ Form::text('telephone') }}
    </p>

    <p>
        <label for="password">Heslo<span style="color: red">*</span></label>
        {{ Form::password('password') }}
    </p>

    <p>
        <label for="password_confirmation">Heslo znovu<span style="color: red">*</span></label>
        {{ Form::password('password_confirmation') }}
    </p>

    <p>
        <label for="user_group">Som<span style="color: red">*</span></label>
        <select name="user_group">
            <option value="1">Fyzická osoba</option>
            <option value="3">Realitná kancelária</option>
        </select>
    </p>


    <p style="margin-left: 10px">{{ Form::submit('Registrovať',array('class'=>'primary-btn mt-50')) }}</p>
    {{ Form::close() }}


</div>
<br /> <br />
<br /> <br />
@include('frontend/footer')
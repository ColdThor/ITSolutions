
@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')


<html>
<head>
    <title>Prihlásenie</title>
</head>
<body>

<div align="center">

{{ Form::open(array('url' => '/it-admin/login')) }}
<h1>Login</h1>

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

<p>{{ Form::submit('Submit!',array('class'=>'editbutton')) }}</p>
{{ Form::close() }}


</div>
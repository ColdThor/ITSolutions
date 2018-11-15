
@extends('backend/header')
@section('page') Login @endsection
@section('content')

<html>
<head>
    <title>Prihlásenie</title>
</head>
<body>



<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Prihlásiť sa</h3>
                </div>



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

                <p style="margin-left: 10px">{{ Form::submit('Submit!',array('class'=>'btn btn-primary')) }}</p>
                {{ Form::close() }}


<br />


            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection










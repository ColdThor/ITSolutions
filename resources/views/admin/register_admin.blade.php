@extends('backend/header')
@section('page') Register @endsection
@section('content')

    <html>
    <head>
        <title>Register</title>
    </head>
    <body>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Zaregistrovať nového admina</h3>
                    </div>

                <div>

                    {{ Form::open(array('url' => '/it-admin/register', 'files' => true)) }}
                    <h1>Registrovať</h1>

                    <!-- if there are login errors, show them here -->
                    <p>

                        {{ $errors->first('email') }}
                        {{ $errors->first('password') }}
                        {{ $errors->first('fotka') }}
                    </p>

                    <p>
                        {{ Form::label('first_name', 'Meno') }}
                        {{ Form::text('first_name') }}
                    </p>

                    <p>
                        {{ Form::label('last_name', 'Priezvisko') }}
                        {{ Form::text('last_name') }}
                    </p>


                    <p>
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email') }}
                    </p>



                    <p>
                        {{ Form::label('telephone', 'Telefónne číslo') }}
                        {{ Form::text('telephone') }}
                    </p>

                    <p>
                        {{ Form::label('password', 'Heslo') }}
                        {{ Form::password('password') }}
                    </p>

                    <p>
                        {{ Form::label('password_confirmation', 'Heslo znovu') }}
                        {{ Form::password('password_confirmation') }}
                    </p>

                    <p>
                        {{ Form::label('fotka', 'Profilová fotka') }}
                        <input name= "fotka" type="file" accept=" .jpg, .jpeg" style="margin-left: 10px" />
                    </p>


                    <p style="margin-left: 10px">{{ Form::submit('Registrovať',array('class'=>'btn btn-primary')) }}</p>
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
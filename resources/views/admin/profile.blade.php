@extends('backend/header')
@section('page') Môj profil @endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Môj profil</h3>
                    </div>

                    <p>

                        {{ session('status') }}
                        {{ $errors->first('password') }}
                    </p>

                    <h3 style="margin-left: 5px">{{$users->first_name . " ". $users->last_name}}</h3>


                    <form method="post" action="{{  action('UserController@changepass', ['id' => $users->id_user])  }}">
                        <div class="box-body">
                            Zmeniť heslo: <br />
                            <div class="form-group">
                                <p>
                                    {{ Form::label('password', 'Heslo') }}
                                    {{ Form::password('password') }}
                                </p>

                                <p>
                                    {{ Form::label('password_confirmation', 'Heslo znovu') }}
                                    {{ Form::password('password_confirmation') }}
                                </p>

                                <br />

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>




                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Zmeniť heslo</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>



@endsection
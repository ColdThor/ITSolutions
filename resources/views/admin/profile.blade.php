@extends('backend/header')
@section('page') Môj profil @endsection
@section('content')
<section class="content-header">
    <h1>Používateľ: {{$users->first_name . " ". $users->last_name}}</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Zmena prihlasovacieho hesla</h3>
                </div>
            <div class="box-body">
            <form method="post" action="{{  action('UserController@changepass', ['id' => $users->id_user])  }}">

                <div class="form-group">
                    <label for="password">Zadajte nové heslo</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Zadajte nové heslo">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Zopakujte nové heslo</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Zopakujte nové heslo">
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-default">Zmeniť heslo</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h5 class="text-red">
                        {{ session('status') }}
                        {{ $errors->first('password') }}
                    </h5>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection

    @extends('backend/header')
    @section('page') Register @endsection
    @section('content')

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Pridať nového administrátora</h3>
                </div>

                {{ Form::open(array('url' => '/it-admin/register', 'files' => true)) }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">Meno</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Meno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Priezvisko</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Priezvisko">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telephone">Telefónne číslo</label>
                                    <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telefónne číslo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Heslo</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Heslo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Zopakujte heslo</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Zopakujte heslo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fotka">Profilová fotka</label>
                                <input type="file" name="fotka" id="fotka" accept=".png .jpg, .jpeg">
                            </div>
                        </div><br>
                        <div class="box-footer">
                            <button type="submit" name="submit" value="submit" class="btn btn-default">Pridať administrátora</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h5 class="text-red">
                                {{ $errors->first('email') }}
                                {{ $errors->first('password') }}
                                {{ $errors->first('fotka') }}
                            </h5>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </section>
@endsection
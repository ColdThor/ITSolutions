@extends('backend/header')
@section('page') Login @endsection
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Prihlásiť sa</h3>
                </div>
                <form role="form" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Zadajte email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Heslo</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Zadajte heslo">
                            </div>
                        </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Prihlásiť sa</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p>
                            {{ $errors->first('no') }}
                            {{ $errors->first('email') }}
                            {{ $errors->first('password') }}
                        </p>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</section>

@endsection










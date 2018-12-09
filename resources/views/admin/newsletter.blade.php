@extends('backend/header')
@section('page') Prehľad @endsection
@section('content')

    <section class="content-header">
        <h1>Newsletter</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        {{ Form::open(array('url' => '/send_newsletter', 'files' => true)) }}
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Poslať newsletter odoberateľom:</h3>
                        <!-- /.box-header -->
                        <br />    <br />
                        <textarea name="newsletter" class="menu-textarea mt-10" style="margin-left: 1%"></textarea>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row      -->
        <br />




        <button type="submit" class="btn btn-primary" name="submit" value="submit">Poslať</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ Form::close() }}


        <p class="sample-text">
            <b>
                {{ $errors->first('newsletter') }}

            </b>
        </p>

    </section>

@endsection
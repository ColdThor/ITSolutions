@extends('backend/header')
@section('page') Prehľad @endsection
@section('content')

    <section class="content-header">
        <h1>Prehľad</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        {{ Form::open(array('url' => '/send_helpdesk', 'files' => true)) }}
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Otázka od: {{$help->email}}</h3>
                        <input type="hidden" name="id_helpdesk" value="{{ $help->id_helpdesk }}">
                    <!-- /.box-header -->
                    <br />     <br />
                    <h3>Text: <br /></h3>
                    <h4> {{$help->text}}</h4>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row      -->
        <br />


        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Odpoveď:</h3>
                        <!-- /.box-header -->
                    </div>

                    <!-- /.box-body -->
                    <textarea name="response" class="menu-textarea mt-10" style="margin-left: 1%"></textarea>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <button type="submit" class="btn btn-primary" name="submit" value="submit">Odpovedať</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ Form::close() }}
    </section>

@endsection
@extends('backend/header')
@section('page') Prehľad @endsection
@section('content')

    <section class="content-header">
        <h1>Prehľad</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Prehľad</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="pop_div"></div>

                        <?= Lava::render('ColumnChart', 'Finances', 'pop_div') ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
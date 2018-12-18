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
                        <h3 class="box-title">Štatistika portálu</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                            <div id="are_div"></div>
                            <?= Lava::render('AreaChart', 'Inzeraty', 'are_div') ?>
                    </div><br><br>

                    <div class="box-body">
                        <div id="chart_div"></div>
                        <?= Lava::render('DonutChart', 'Kraje', 'chart_div') ?>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div id="pop_div"></div>
                                <?= Lava::render('ColumnChart', 'Finances', 'pop_div') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div id="poll_div"></div>
                                <?= Lava::render('BarChart', 'Inzerenti', 'poll_div') ?>
                            </div>
                        </div>
                    </div><br><br>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
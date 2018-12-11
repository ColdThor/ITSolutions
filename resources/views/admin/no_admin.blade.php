@extends('backend/header')
@section('page') Nemáte prístup @endsection
@section('content')

<section class="content-header">
    <h1>Administračné rozhranie</h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Nemáte prístup k tejto stránke, prihláste sa!</h3>
                </div>
            <div class="box-body">
                <a type="submit" class="btn btn-warning" href="<?php echo url('/it-admin/login'); ?>">Prihlásiť sa</a>
            </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection



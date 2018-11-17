@extends('backend/header')
@section('page') Editácia stavu inzercie @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia stavu inzercie</h3>
                    </div>
                    <form role="form" method="post" action="{{  action('ConditionController@edit_validator', ['id' => $condition->id_condition])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_condition" value="{{ $condition->id_condition }}">
                                <label for="title">Názov:</label>
                                <input type="text" class="form-control" name="title" value="{{ $condition->title }}">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Editovať</button>
                                <button type="submit" class="btn btn-info pull-right" onclick="javascript:window.history.go(-1);">Naspäť</button>
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
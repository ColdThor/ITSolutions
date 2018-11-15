@extends('backend/header')
@section('page') Editácia typu inzercie @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia typu inzercie</h3>
                    </div>
                    <form role="form" method="post" action="{{  action('TypeController@edit_validator', ['id' => $type->id_type])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_type" value="{{ $type->id_type }}">
                                <label for="title">Názov:</label>
                                <input type="text" class="form-control" name="title" value="{{ $type->title }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Editovať</button>
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


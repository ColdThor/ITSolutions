@extends('backend/header')
@section('page') Editácia druhu inzercie @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia druhu inzercie</h3>
                    </div>
                    <form role="form" method="post" action="{{  action('SpecificationController@edit_validator', ['id' => $specification->id_specification])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_type" value="{{ $specification->id_specification }}">
                                <label for="title">Názov:</label>
                                <input type="text" class="form-control" name="title" value="{{ $specification->title }}">
                            </div>
                            <div class="form-group">
                                <label for="group">Skupina:</label>
                                <input type="text" class="form-control" name="group" value="{{ $specification->group }}">
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

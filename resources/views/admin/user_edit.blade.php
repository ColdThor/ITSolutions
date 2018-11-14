@extends('backend/header')
@section('page')Editácia používateľa @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia používateľa</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" method="post" action="{{  action('UserController@edit_validator', ['id' => $users->id_user])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_user" value="{{ $users->id_user }}">

                                <label for="first_name">Meno:</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $users->first_name }}">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Priezvisko:</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $users->last_name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telefonné číslo:</label>
                                <input type="text" class="form-control" name="telephone" value="{{ $users->telephone }}">
                            </div>
                            <div class="form-group">
                                <label for="rola">Rola:</label>
                                <select class="form-control" name="rola">
                                    <?php foreach($rola as $rl):
                                        if($rl->id_user_group == $users->id_user_group): ?>
                                            <option value="{{$rl->id_user_group}}" selected>{{$rl->title}}</option>
                                        <?php else: ?>
                                            <option value="{{$rl->id_user_group}}">{{$rl->title}}</option>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Editovať používateľa</button>
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
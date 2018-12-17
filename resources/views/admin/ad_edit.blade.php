
@extends('backend/header')
@section('page') Editovať inzerciu @endsection
@section('content')
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Editácia inzerátu</h3>
        </div>
        <form method="post" action="{{  action('AdvertisementController@edit_validator', ['id' => $ads->id_advertisement])  }}">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="id_advertisement" value="{{ $ads->id_advertisement }}">
                            <label for="title">Názov</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $ads->title }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Popis</label>
                            <textarea class="form-control" name="description" id="description">{{ $ads->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Dátum pridania</label>
                            <input type="date" class="form-control" name="date" id="date" value="{{ $ads->date }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_user">Inzerent</label>
                            <select class="form-control" name="id_user">
                                <?php foreach($user as $us):
                                if($us->id_user == $ads->id_user): ?>
                                <option value="{{$us->id_user}}" selected>{{$us->first_name. " ". $us->last_name}}</option>
                                <?php else: ?>
                                <option value="{{$us->id_user}}">{{$us->first_name. " ". $us->last_name}}</option>
                                <?php endif; ?>
                                <?php endforeach ?>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_mail">Email</label>
                            <input type="text" class="form-control" name="contact_mail" id="contact_mail" value="{{ $ads->contact_mail }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_phone">Telefón</label>
                            <input type="text" class="form-control" name="contact_phone" id="contact_phone" value="{{ $ads->contact_phone }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_location">Miesto</label>
                            <select class="form-control" name="id_location" id="id_location">
                                <?php foreach($location as $lo):
                                if($lo->id_location == $ads->id_location): ?>
                                <option value="{{$lo->id_location}}" selected>{{$lo->city}}</option>
                                <?php else: ?>
                                <option value="{{$lo->id_location}}">{{$lo->city}}</option>
                                <?php endif; ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Cena</label>
                            <input type="number" class="form-control" name="price" id="price" value="{{ $ads->price }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="area">Výmera</label>
                            <input type="number" class="form-control" name="area" id="area" value="{{ $ads->area }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_specification">Druh</label>
                            <select class="form-control" id="id_specification" name="id_specification">
                                <?php foreach($specification as $sp):
                                if($sp->id_specification == $ads->id_specification): ?>
                                <option value="{{$sp->id_specification}}" selected>{{$sp->title}}</option>
                                <?php else: ?>
                                <option value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                <?php endif; ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_type">Typ</label>
                            <select class="form-control" name="id_type">
                                <?php foreach($type as $tp):
                                if($tp->id_type == $ads->id_type): ?>
                                <option value="{{$tp->id_type}}" selected>{{$tp->title}}</option>
                                <?php else: ?>
                                <option value="{{$tp->id_type}}">{{$tp->title}}</option>
                                <?php endif; ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_condition">Stav</label>
                            <select class="form-control" name="id_condition">
                                <?php foreach($condition as $co):
                                if($co->id_condition == $ads->id_condition): ?>
                                <option value="{{$co->id_condition}}" selected>{{$co->title}}</option>
                                <?php else: ?>
                                <option value="{{$co->id_condition}}" >{{$co->title}}</option>
                                <?php endif; ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="box-footer">
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Editovať</button>
                    <button type="submit" class="btn btn-info pull-right" onclick="javascript:window.history.go(-1);">Naspäť</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.row -->
</section>
@endsection





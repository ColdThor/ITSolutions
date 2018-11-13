
@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')

<div class="row" style="color: #02318e;" align="center">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="row" style=" alignment: center; color: #02318e" align="center">


    <form method="post" action="{{  action('AdvertisementController@edit_validator', ['id' => $ads->id_advertisement])  }}">



        <div class="form-group">
            <input type="hidden" name="id_advertisement" value="{{ $ads->id_advertisement }}">
            Názov: <br />
            <input type="text" name="title" value="{{ $ads->title }}">
            <br />
            Popis: <br />
            <input type="text" name="description" value="{{ $ads->description }}">
            <br />
            Dátum pridania: <br />
            <input type="date" name="date" value="{{ $ads->date }}">
            <br />
            Inzerent: <br />
            <div class="form-group">
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
            Email: <br />
            <input type="text" name="contact_email" value="{{ $ads->contact_mail }}">
            <br />
            Telefonné číslo: <br />
            <input type="text" name="contact_phone" value="{{ $ads->contact_phone }}">
            <br />

            Miesto: <br />
            <div class="form-group">
                <select class="form-control" name="id_location">
                    <?php foreach($location as $lo):
                    if($lo->id_location == $ads->id_location): ?>
                    <option value="{{$lo->id_location}}" selected>{{$lo->region}}</option>
                    <?php else: ?>
                    <option value="{{$lo->id_location}}">{{$lo->region}}</option>
                    <?php endif; ?>
                    <?php endforeach ?>
                </select>
            </div>


            Cena: <br />
            <input type="number" name="price" value="{{ $ads->price }}">
            <br />
            Výmera: <br />
            <input type="number" name="area" value="{{ $ads->area }}">
            <br />

           Druh: <br />
            <div class="form-group">
                <select class="form-control" name="id_specification">
                    <?php foreach($specification as $sp):
                    if($sp->id_specification == $ads->id_specification): ?>
                    <option value="{{$sp->id_specification}}" selected>{{$sp->title}}</option>
                    <?php else: ?>
                        <option value="{{$sp->id_specification}}">{{$sp->title}}</option>
                    <?php endif; ?>
                    <?php endforeach ?>
                </select>
            </div>

            Typ: <br />
            <div class="form-group">
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


            Stav: <br />
            <div class="form-group">
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
            <br />

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>





        <div align="center">
            <div class="col-am-offset-2 col-am-10">
                <br />
                <input type="submit" class="editbutton" name="submit" value="Editovať zoznam" />
            </div>
        </div>
    </form>

    <br />


    <div class="col-md-4">
        <button type="button" class="editbutton" onclick="javascript:window.history.go(-1);">Naspäť</button>
    </div>
</div>    <!-- /row -->
<div class="row">

</div>
</div>


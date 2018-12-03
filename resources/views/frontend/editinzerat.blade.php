
@include('frontend/header')

@section('page') Editovať inzerát @endsection

<br />  <br />
<br /> <br />
<br /> <br />

<div align="center">
<!-- Main content -->


            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editácia inzercie</h3>
                    </div>


                    <p>
                        <label for="required">Položky označené s <span style="color: red">*</span> sú povinné.</label>
                        <br />
                        {{ $errors->first('title') }}
                        {{ $errors->first('contact_mail') }}
                        {{ $errors->first('description') }}
                        {{ $errors->first('area') }}
                        {{ $errors->first('price') }}
                        {{ $errors->first('condition') }}
                        {{ $errors->first('specification') }}
                        {{ $errors->first('type') }}
                        {{ $errors->first('location') }}
                        {{ $errors->first('eula') }}
                        {{ $errors->first('fotka') }}
                        {{ $errors->first('g-recaptcha-response') }}
                    </p>



                    <form method="post" action="{{  action('HomeController@do_editinzerat', ['id' => $ads->id_advertisement])  }}">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id_advertisement" value="{{ $ads->id_advertisement }}">
                                <label for="title">Názov inzerátu<span style="color: red">*</span></label>
                                <input type="text" name="title" value="{{ $ads->title }}">
                                <br />
                                <label for="description">Popis inzerátu<span style="color: red">*</span></label>
                                <textarea id="description" name="description" >
                                    {{ $ads->description }}
                                </textarea>

                                <br />
                                <label for="contact_mail">Email<span style="color: red">*</span></label>
                                <input type="text" name="contact_mail" value="{{ $ads->contact_mail }}">
                                <br />
                                <label for="contact_phone">Tel. kontakt<span style="color: red">*</span></label>
                                <input type="text" name="contact_phone" value="{{ $ads->contact_phone }}">
                                <br />

                                <label for="id_location">Miesto<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_location">
                                        <?php foreach($location as $lo):
                                        if($lo->id_location == $ads->id_location): ?>
                                        <option value="{{$lo->id_location}}" selected>{{$lo->city}}</option>
                                        <?php else: ?>
                                        <option value="{{$lo->id_location}}">{{$lo->city}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <label for="price">Cena<span style="color: red">*</span></label>
                                <input type="number" name="price" value="{{ $ads->price }}">
                                <br />
                                <label for="area">Výmera<span style="color: red">*</span></label>
                                <input type="number" name="area" value="{{ $ads->area }}">
                                <br />

                                <label for="id_specification">Druh<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_specification">
                                        <?php foreach($specification as $sp):
                                        if($sp->id_specification == $ads->id_specification): ?>
                                        <option value="{{$sp->id_specification}}" selected>{{$sp->title}}</option>
                                        <?php else: ?>
                                        <option value="{{$sp->id_specification}}">{{$sp->title}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <label for="id_type">Typ<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_type">
                                        <?php foreach($type as $tp):
                                        if($tp->id_type == $ads->id_type): ?>
                                        <option value="{{$tp->id_type}}" selected>{{$tp->title}}</option>
                                        <?php else: ?>
                                        <option value="{{$tp->id_type}}">{{$tp->title}}</option>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <label for="id_condition">Stav<span style="color: red">*</span></label>
                                <div class="form-group">
                                    <select  name="id_condition">
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

                            <input type="checkbox" name="eula" value="eula"> Súhlasím s obchodnými podmienkami<span style="color: red">*</span><br>


                            <div class="g-recaptcha" data-sitekey="6LdscXwUAAAAAEjwe-hTuEOTCptX4bHax134Q6xZ"></div>



                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Editovať</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

        <!-- /.row -->


</div>
<br />  <br />
<br /> <br />

@include('frontend/footer')





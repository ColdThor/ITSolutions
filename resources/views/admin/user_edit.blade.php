
@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')

<div class="row" style="color: #02318e;" align="center">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="row" style=" alignment: center; color: #02318e" align="center">


    <form method="post" action="{{  action('UserController@edit_validator', ['id' => $users->id_user])  }}">



        <div class="form-group">
            <input type="hidden" name="id_user" value="{{ $users->id_user }}">
            Meno: <br />
            <input type="text" name="first_name" value="{{ $users->first_name }}">
            <br />
            Priezvisko: <br />
            <input type="text" name="last_name" value="{{ $users->last_name }}">
            <br />
            Email: <br />
            <input type="email" name="email" value="{{ $users->email }}">
            <br />
            Telefonné číslo: <br />
            <input type="text" name="telephone" value="{{ $users->telephone }}">
            <br />
            Rola: <br />
            <div class="form-group">
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


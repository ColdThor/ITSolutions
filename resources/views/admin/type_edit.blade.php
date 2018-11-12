
@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')

<div class="row" style="color: #02318e;" align="center">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="row" style=" alignment: center; color: #02318e" align="center">


    <form method="post" action="{{  action('TypeController@edit_validator', ['id' => $type->id_type])  }}">



        <div class="form-group">
            <input type="hidden" name="id_type" value="{{ $type->id_type }}">
            Názov: <br />
            <input type="text" name="title" value="{{ $type->title }}">
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


@include('frontend/header')

@section('page') Moje inzeráty @endsection
<br /> <br />
<br /> <br />
<br /> <br />


<div align="center">
@if(session()->has('mypage'))
    <?php $search = session()->get('mypage');
        foreach($search as $ads):
            $fotka = $ads->id_advertisement;
            $user_id = $ads->id_user_group;
        ?>
        <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black"> <img  align="center" class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $fotka ?>/fotka_1.png" alt=""  style="position:relative; left:350px; float:left; height: 20%; width: 20%"></a>
        <div>
            <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black">
                <h1>{{$ads->title}}</h1>
                Popis: {{$ads->description}} <br />
                Dátum zverejnenia: {{$ads->date}} <br />
                Výmera: {{$ads->area}} m<sup style="color: black">2</sup> <br />
                Cena: <span style="color:red" > {{$ads->price}} </span>€ <br />
                Počet prezretí: {{$ads->views}}
                <br />
                <br />
                <br />
                <br />
                <br />
            </a>
    <?php endforeach; ?>
    @endif

<?php if($user_id == 3 || $user_id == 4):?>
            <div class="box-body">
                <div id="pop_div"></div>

                <?= Lava::render('ColumnChart', 'Finances', 'pop_div') ?>
            </div>
            <?php endif; ?>



</div>







<br /> <br />
<br /> <br />

@include('frontend/footer')
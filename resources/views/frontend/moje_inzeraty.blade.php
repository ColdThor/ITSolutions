@include('frontend/header')
@section('page') Moje inzeráty @endsection
<section class="property-area section-gap relative" id="property">
    <div class="container pt-30">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pt-30 pb-40 header-text">
                <h2>Moje inzeráty</h2>
            </div>
        </div>
        <div class="row">
            @if(session()->has('mypage'))
                <?php $search = session()->get('mypage');
                $i=0;
                $user_id = 0;
                foreach($search as $ads):
                $i++;

                $fotka = $ads->id_advertisement;
                $user_id = $ads->id_user_group;

                ?>
                <div class="col-lg-6">
                    <div class="single-property">
                        <div class="images">
                            <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black">
                                <img class="img-fluid mx-auto d-block" src="{{ asset('public/storage/inzeraty/inzerat_'.$fotka."/fotka_1.png") }}" alt="" ></a>
                            <span>{{$ads->type}} </span>
                        </div>
                        <div class="desc">
                            <div class="top d-flex justify-content-between">
                                <h5><a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>">{{$ads->title}}</a></h5>
                            </div>
                            <div class="bottom d-flex justify-content-start">
                                <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$ads->price}}€</b></p>
                                <p><span class="lnr lnr-crop"></span>Výmera: <b>{{$ads->area}}m<sup>2</sup></b></p>
                            </div>
                            <div class="bottom d-flex justify-content-start">
                                <p><span class="lnr lnr-eye"></span>Počet zobrazení: <b>{{$ads->views}}</b></p>
                                <p><span class="lnr lnr-history"></span>Pridané: <b>{{$ads->date}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            @endif

        </div>

        <?php if($user_id == 3 || $user_id == 4):?>
        <br>
        <h4>Štatistiky</h4>
        <br>
        <div class="box-body">
            <div id="view_div"></div>
            <?= Lava::render('BarChart', 'Zobrazenia', 'view_div') ?>
        </div>
        <br>
        <div class="box-body">
            <div id="kraj_div"></div>
            <?= Lava::render('DonutChart', 'Kraj', 'kraj_div') ?>
        </div>
        <br>
        <div class="box-body">
            <div id="krajw_div"></div>
            <?= Lava::render('BarChart', 'Krajview', 'krajw_div') ?>
        </div>
        <br>
        <?php endif; ?>

        <?php if($i==0): ?>
        <span style="color: black">Používateľ nemá žiadne inzeráty</span>
        <?php endif; ?>


    </div>
</section>

@include('frontend/footer')
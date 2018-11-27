@include('frontend/header')
@section('page') Inzeráty @endsection
<section class="property-area section-gap relative" id="property">
    <div class="overlay overlay-bg"></div>
    <div class="container pt-100">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Výsledky hľadania</h1>
            </div>
        </div>
        <div class="row">

            @if(session()->has('search'))
                <?php $search = session()->get('search');
                $i=0;
                foreach($search as $ads):
                $fotka = $ads->id_advertisement;
                $i++; ?>
                <div class="col-lg-6">
                    <div class="single-property">
                        <div class="images">
                            <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black">    <img class="img-fluid mx-auto d-block"
                                                                                                                    src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $fotka ?>/fotka_1.png" alt="" style="max-height: 250px"> </a>
                            <span>Typ predaja: {{$ads->type}} </span>
                        </div>

                        <div class="desc">
                            <div class="top d-flex justify-content-between">
                                <h5>  <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>"> {{$ads->title}}</a></h5>
                            </div>
                            <div class="bottom d-flex justify-content-start">
                                <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$ads->price}}€</b></p>
                                <p><span class="lnr lnr-crop"></span>Výmera: <b>{{$ads->area}}m<sup>2</sup></b></p>
                            </div>
                            <div class="bottom d-flex justify-content-start">
                                <p><span class="lnr lnr-map-marker"></span>Poloha: {{$ads->location}}</p>
                                <p><span class="lnr lnr-bubble"></span>Pridané: <b>{{$ads->date}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;

                if($i==0): ?>

                <h1>Nenašli sa žiadne inzeráty podľa kritérií</h1>
                <?php endif; ?>

            @else
                <script>
                    document.location.href="{!! route('search_all'); !!}";
                </script>
            @endif
        </div>
    </div>
</section>

@include('frontend/footer')
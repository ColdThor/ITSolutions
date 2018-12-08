@include('frontend/header')
@include('frontend/chat')
@section('page') Inzeráty @endsection

<section class="property-area section-gap relative" id="property">
    <div class="container pt-30">
        <div class="row pt-20">
            <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                <h2>Výsledky hľadania</h2>
            </div>
        </div>
        <div class="row">
            <?php  $i=0; ?>
            @if(session()->has('search'))
                <?php $search = session()->get('search');

                foreach($search as $ads):
                $fotka = $ads->id_advertisement;
                $i++; ?>
            <div class="col-lg-6">
                <div class="single-property">
                    <div class="images">
                        <a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>" style="color: black">
                            <img class="img-fluid mx-auto d-block" src="/reality/storage/app/public/inzeraty/inzerat_<?php echo $fotka ?>/fotka_1.png" alt="">
                        </a>
                        <span>{{$ads->type}} </span>
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h5><a href="<?php echo url('/inzerat/'.$fotka.'/false'); ?>"> {{$ads->title}}</a></h5>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-apartment"></span>Cena: <b>{{$ads->price}}€</b></p>
                            <p><span class="lnr lnr-crop"></span>Výmera: <b>{{$ads->area}}m<sup>2</sup></b></p>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                            <p><span class="lnr lnr-map-marker"></span>Poloha: <b>{{$ads->location}}</b></p>
                            <p><span class="lnr lnr-history"></span>Pridané: <b>{{$ads->date}}</b></p>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>



            @else
                <script>
                    document.location.href="{!! route('search_all'); !!}";
                </script>
            @endif
        </div>
    </div>


   <?php if($i==0): ?>
    <div class="col-md-8 pt-30 pb-40 header-text" style="margin-left: 15%">
        <h2>Nenašli sa žiadne inzeráty podľa kritérií hľadania</h2>
    </div>
<?php endif; ?>

</section>

@include('frontend/footer')
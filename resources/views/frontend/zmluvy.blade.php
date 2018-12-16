@include('frontend/header')
@include('frontend/chat')
@section('page') Zmluvy @endsection

<section class="property-area section-gap relative" >
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pt-30 pb-40 header-text">
                <h3>Vzory právnych zmlúv</h3>
                <h5 class="info pt-10">Všetky dokumenty pre kúpu, predaj, výstavbu alebo úpravu Vašej nehnuteľnosti</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-prop">
                    <div class="images">
                        <div class="imagebox">
                            <a href="<?php echo url('/kupa')?>">
                                <img class="img-fluid mx-auto d-block" src="/assets/img/zmluva1.jpg" alt="Kúpa | Predaj | Prenájom">
                                <span class="imagebox-desc">Kúpa | Predaj | Prenájom</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="single-prop">
                    <div class="images">
                        <div class="imagebox">
                            <a href="<?php echo url('/ziadosti')?>">
                                <img class="img-fluid mx-auto d-block" src="/assets/img/zmluva2.jpg" alt="Žiadosti">
                                <span class="imagebox-desc">Žiadosti</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-prop">
                    <div class="images">
                        <div class="imagebox">
                            <a href="<?php echo url('/navrhy'); ?>">
                                <img class="img-fluid mx-auto d-block" src="/assets/img/zmluva3.jpg" alt="Návrhy a ohlásenia" >
                                <span class="imagebox-desc">Návrhy a ohlásenia</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend/footer')
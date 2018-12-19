@include('frontend/header')
@include('frontend/chat')
@section('page') Kúpa, predaj, nájom @endsection
<div align="center">
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pt-30 pb-30 header-text">
                    <h3 class="hh">Všetky potrebné dokumenty na jednom mieste</h3>
                </div>
            </div>
            <div class="row pb-20" >
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/assets/img/ziadost-o-predlzenie-najomnej-zmluvy.pdf" download>
                        <div class="single-service" >
                            <h4>Vzor žiadosti o predĺženie nájomnej zmluvy</h4>
                            <a href="/assets/img/ziadost-o-predlzenie-najomnej-zmluvy.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/assets/img/ziadost-o-pridelenie-najomneho-bytu.pdf" download="">
                        <div class="single-service">
                            <h4>Vzor žiadosti o pridelenie nájomného bytu</h4>
                            <a href="/assets/img/ziadost-o-pridelenie-najomneho-bytu.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/assets/img/ziadost-o-vydanie-rovnopisu-z-notarskej-zapisnice.pdf" download="">
                        <div class="single-service">
                            <h4>Vzor žiadosti o vydanie rovnopisu z notárskej zápisnice</h4>
                            <a href="/assets/img/ziadost-o-vydanie-rovnopisu-z-notarskej-zapisnice.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/assets/img/zmluva-o-zriadeni-spolocenstva-vlastnikov-bytov-a-nebytovych-priestorov.pdf" download="">
                        <div class="single-service">
                            <h4>Zmluva o zriadení spoločenstva vlastníkov bytov</h4>
                            <a href="/assets/img/zmluva-o-zriadeni-spolocenstva-vlastnikov-bytov-a-nebytovych-priestorov.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/assets/img/zmluva-o-zruseni-a-vysporiadani-podieloveho-spoluvlastnictva-k-pozemku-a-nehnutelnosti.pdf" download="">
                        <div class="single-service">
                            <h4>Zmluva o zrušení a vysporiadaní podielového spoluvlastníctva</h4>
                            <a href="/assets/img/zmluva-o-zruseni-a-vysporiadani-podieloveho-spoluvlastnictva-k-pozemku-a-nehnutelnosti.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('frontend/footer')
@include('frontend/header')
@include('frontend/chat')
@section('page') Žiadosti @endsection
<div align="center">
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pt-50 pb-30 header-text">
                    <h3>Všetky potrebné dokumenty na jednom mieste</h3>
                </div>
            </div>
            <div class="row pb-20" >
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/reality/assets/img/ziadost-o-predlzenie-platnosti-stavebneho-povolenia.pdf" download>
                        <div class="single-service" >
                            <h4>Žiadosť o predĺženie platnosti stavebného povolenia</h4>
                            <a href="/reality/assets/img/ziadost-o-predlzenie-platnosti-stavebneho-povolenia.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/reality/assets/img/ziadost-pridelit-supisne-cislo.pdf" download="">
                        <div class="single-service">
                            <h4>Žiadosť o pridelenie súpisného a orientačného čísla</h4>
                            <a href="/reality/assets/img/ziadost-pridelit-supisne-cislo.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="reality/assets/img/ziadost-o-zmenu-v-uzivani-stavby.pdf" download="">
                        <div class="single-service">
                            <h4>Žiadosť o zanamenanie zmeny v užívaní stavby</h4>
                            <a href="reality/assets/img/ziadost-o-zmenu-v-uzivani-stavby.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/reality/assets/img/ziadost-o-zmenu-stavby-pred-jej-dokoncenim.pdf" download="">
                        <div class="single-service">
                            <h4>Žiadosť o zmenu stavby pred jej dokončením</h4>
                            <a href="/reality/assets/img/ziadost-o-zmenu-stavby-pred-jej-dokoncenim.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="/reality/assets/img/ziadost-o-stavebne-povolenie.pdf" download="">
                        <div class="single-service">
                            <h4>Žiadosť o vydanie stavebného povolenia</h4>
                            <a href="/reality/assets/img/ziadost-o-stavebne-povolenie.pdf" download class="genric-btn default circle">Stiahnuť</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('frontend/footer')
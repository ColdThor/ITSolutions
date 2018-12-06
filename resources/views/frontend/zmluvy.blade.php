@include('frontend/header')
@section('page') Zmluvy @endsection

<section class="property-area section-gap relative" >
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pt-40 pb-20 header-text">
                <h3 class="pb-10">Vzory právnych zmlúv</h3>
                <h5 class="info">Všetky dokumenty pre kúpu, predaj, výstavbu alebo úpravu Vašej nehnuteľnosti</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-prop" style="height: 95%">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva1.jpg" alt="">
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">Kúpa, predaj, nájom</a></h4>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="single-prop" style="height: 95%">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva2.jpg" alt="">

                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">Žiadosti</a></h4>

                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">

                            </div>
                            <div class="d-flex justify-content-start">
                                <p></p>
                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-prop" style="height: 95%">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva3.jpg" alt="" >
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="#">Návrhy a ohlásenia</a></h4>
                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">
                            </div>
                            <div class="d-flex justify-content-start">
                                <p><span class="rd"></span></p>
                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend/footer')
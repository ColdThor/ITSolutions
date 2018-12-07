@include('frontend/header')
@include('frontend/chat')
@section('page') Zmluvy @endsection



<!-- Start property Area -->
<section class="property-area section-gap relative" >
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Vzory zmlúv zadarmo</h1>

                <p>
                    Vyberte si dokumenty, ktoré potrebujete na kúpu, predaj, výstavbu alebo úpravu nehnuteľností!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4" >
                <div class="single-property" style="height: 95%">
                    <div class="images">

                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva1.jpg" alt="">
                    </div>
                    <div class="desc">
                        <div class="top d-flex justify-content-between">

                            <h4><a href="<?php echo url('/kupa')?>">Kúpa, predaj, nájom</a></h4>

                        </div>
                        <div class="middle">
                            <div class="d-flex justify-content-start">

                            </div>
                            <div class="d-flex justify-content-start">

                            </div>
                        </div>
                        <div class="bottom d-flex justify-content-start" style="margin-top: 5%">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">

                <div class="single-property" style="height: 95%">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva2.jpg" alt="">

                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="<?php echo url('/ziadosti'); ?>">Žiadosti</a></h4>

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
                <div class="single-property" style="height: 95%">
                    <div class="images">
                        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/zmluva3.jpg" alt="" >

                    </div>

                    <div class="desc">
                        <div class="top d-flex justify-content-between">
                            <h4><a href="<?php echo url('/navrhy'); ?>">Návrhy a ohlásenia</a></h4>

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
<!-- End property Area -->



<br /> <br />
@include('frontend/footer')
@include('frontend/header')
@section('page') Užitočné informácie @endsection

<div align="center">
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pt-50 pb-30 header-text">
                    <h3>Užitočné informácie</h3>
                </div>
            </div>

            <div class="row pb-20" >
                <div class="col-lg-4 col-md-6 pb-30" href="<?php echo url('/zmluvy'); ?>">
                    <a href="<?php echo url('/zmluvy'); ?>"style="color: #0a0a0a">
                        <div class="single-service" >
                            <h4><span class="lnr lnr-book" ></span>Zmluvy</h4>
                            <p>Všetky potrebné zmluvy máme pre Vás prichystané na jednom mieste.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30" href="<?php echo url('/poradenstvo'); ?>">
                    <a href="<?php echo url('/poradenstvo'); ?>"style="color: #0a0a0a">
                        <div class="single-service">
                            <h4><span class="lnr lnr-users"></span>Poradenstvo </h4>
                            <p>V prípade akýchkoľvek Vašich otázok neváhajte využiť službu poradne.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <a href="<?php echo url('/hypoteky'); ?>" style="color: #0a0a0a">
                        <div class="single-service">
                            <h4><span class="lnr lnr-layers" ></span> Hypotéky </h4>
                            <p>Všetky potrebné informácie o hypotékach na jednom mieste!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('frontend/footer')

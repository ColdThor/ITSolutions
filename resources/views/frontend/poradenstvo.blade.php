@include('frontend/header')

@section('page') Poradenstvo @endsection

<section class="contact-area" id="contact">
    <div class="container-fluid">
        <br><br><br><br>
        <div class="row align-items-center d-flex justify-content-start">

            <h1 align="center" style="margin-left: 5%">Do formulára napíšte svoju otázku</h1>

            <p>Napíšte svoju otázku a registrovaní právnici Vám poskytnú kvalifikovaný právny názor.</p>
            <div class="col-lg-4 col-md-12 pt-100 pb-100">
                <form class="form-area" id="myForm" action="mail.php" method="post">
                    <input name="fname" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zadajte svoj email'" class="common-input mt-10" required="" type="text">
                    <textarea class="common-textarea mt-10" name="message" placeholder="Otázka" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vaša otázka'" required=""></textarea>
                    <button class="primary-btn mt-20">Odoslať<span class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





<br /> <br />
@include('frontend/footer')
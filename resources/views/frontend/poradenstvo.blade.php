@include('frontend/header')
@include('frontend/chat')
@section('page') Poradenstvo @endsection

<section class="contact-area" id="contact">
    <div class="container-fluid">
        <br><br><br><br>
        <div class="row align-items-center d-flex justify-content-start">

            <br><br><br><br>
            <h3  style="margin-left: 5%" style="color: #0a0a0a">Napíšte svoju otázku a registrovaní právnici Vám poskytnú kvalifikovaný právny názor.</h3>

            <div class="col-lg-4 col-md-12 pt-100 pb-100" >
                <form class="form-area" id="myForm" action="mail.php" method="post" >

                    <input name="fname" placeholder="Meno" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Napíšte svoje meno'" class="common-input mt-10" required="" type="text">
                    <input name="fname" placeholder="Nadpis" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zadajte nadpis'" class="common-input mt-10" required="" type="text">

                    <textarea class="common-textarea mt-10" name="message" placeholder="Otázka" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Text otázky'" required=""></textarea>
                    <button class="primary-btn mt-20">Odoslať<span class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<br /> <br />  <br />
@include('frontend/footer')
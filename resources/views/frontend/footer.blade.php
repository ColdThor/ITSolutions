<!-- Start contact-info Area -->
<section class="about-area section-gap" id="contact">
    <div class="container">
        <div class="row">
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <h4>Adresa</h4>
                <p class="single-info">
                    Tr. Andreja Hlinku 1,  Nitra 94901, <br>
                    Slovenská Republika
                </p>
            </div>
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <h4>Kontakt</h4>
                <p>
                    Tel.: +421 918 157 419<br>
                    Email: <a href="mailto:info@svetrealit.sk" target="_top">info@svetrealit.sk</a>
                </p>
            </div>
            <div class="single-info col-lg-4 col-md-12 pt-10">
                <div class="single-footer-widget ">
                    <h4>Newsletter</h4>
                    <p>Prihláste sa na odber aktuálnych<br>
                        noviniek zo sveta realít.
                    </p>

                    <style>
                        .click-btn {
                            cursor: pointer;
                        }

                        .fa {
                            color:white;
                        }
                    </style>

                    <div class="d-flex align-items-center justify-content-center">
                        <div class="" id="mc_embed_signup">
                            {{ Form::open(array('url' => '/subscribe', 'files' => true)) }}                                <div class="d-flex flex-row">
                                    <input class="form-control" name="email" placeholder="Zadať email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zadajte email '" required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-info Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap-footer">
    <div class="container">
        <div class="footer-bottom d-flex justify-content-center align-items-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright© <script>document.write(new Date().getFullYear());</script>. Svet realít</p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
<script src="/reality/assets/js/multiple-select.js"></script>
<script type="text/javascript"  src="/reality/assets/js/jquery.paver.min.js"></script>
<script type="text/javascript"  src="/reality/assets/js/functions.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="/reality/assets/js/vendor/bootstrap.min.js"></script>
<script src="/reality/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="/reality/assets/js/jquery.nice-select.min.js"></script>
<script src="/reality/assets/js/jquery.sticky.js"></script>
<script src="/reality/assets/js/ion.rangeSlider.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/reality/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/reality/assets/js/main.js"></script>





<script>
    $('select.location').multipleSelect({
        filter: true
    });
</script>


<script type="text/javascript">
    $(function () {
        // Paver
        $('div.panorama').paver();
    });

</script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
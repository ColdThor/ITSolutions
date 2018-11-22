<!DOCTYPE html>
<html lang="sk" class="no-js">
<head>

    <link rel="stylesheet" href="/reality/assets/css/linearicons.css">
    <link rel="stylesheet" href="/reality/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/reality/assets/css/nice-select.css">
    <link rel="stylesheet" href="/reality/assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="/reality/assets/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="/reality/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/reality/assets/css/main.css">


    <!-- Mobile Specif ic Meta -->
    <link rel="icon" href='/reality/assets/img/fav.png'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->

    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Svet realít</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->

</head>
<body>
@yield('section')
<!-- Start Header Area -->
<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-end align-items-center">
                <ul class="list">
                    @if(session()->has('userID'))
                        <li>
                            <a href="#"> Prihlásený: {{session()->get('userName')}}</a>
                        </li>
                        <li>
                            <a href="<?php echo url('/user/logout'); ?>">Odhlásiť sa</a></li>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo url('/'); ?>">
                <img class="logo-menu" src="/reality/assets/img/f_menu_logo.png" alt="menu-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="#home">Domov</a></li>
                    <li><a href="#about">O nás</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#">Moje inzeráty</a></li>
                    <li><a href="<?php echo url('/user/login'); ?>">Realitná kancelária</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield ('content')

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>O nás</h6>
                    <p>
                        Ako novátorská rezidenčná realitná firma posilňujeme realitný trh, aby naši klienti mali dostatok prostriedkov na poradenstvo
                    </p>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Odber</h6>
                    <p>Zostaňte aktualizovaný s naším najnovším</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="EMAIL" placeholder="Zadať email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zadajte email '" required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                    <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Sme aj na Instagrame</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="/reality/assets/img/i1.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i2.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i3.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i4.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i5.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i6.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i7.jpg" alt=""></li>
                        <li><img src="/reality/assets/img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Pridajte sa k nám</h6>
                    <p>Buďme sociálny</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright© ITSolutions <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>




<!-- End footer Area -->

<script src="/reality/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="/reality/assets/js/vendor/bootstrap.min.js"></script>
<script src="/reality/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="/reality/assets/js/jquery.nice-select.min.js"></script>
<script src="/reality/assets/js/jquery.sticky.js"></script>
<script src="/reality/assets/js/ion.rangeSlider.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/reality/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/reality/assets/js/main.js"></script>
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

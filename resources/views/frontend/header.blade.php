<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>




    <link rel="stylesheet" href="/reality/assets/css/linearicons.css">
    <link rel="stylesheet" href="/reality/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/reality/assets/css/nice-select.css">
    <link rel="stylesheet" href="/reality/assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="/reality/assets/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="/reality/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/reality/assets/css/main.css">
    <link rel="stylesheet" href="/reality/assets/css/paver.css">
    <link rel="stylesheet" href="/reality/assets/css/fSelect.css">




    <!-- Problémový stylesheet

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    -->

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
    <title>IT Solutions</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<!-- Start Header Area -->
<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-end align-items-center">
                <ul class="list">
                    @if(session()->has('userID'))
                        <li><a href="<?php echo url('/moje_inzeraty'); ?>">Prihlásený: {{session()->get('userName')}}</a></li>
                        <li><a href="<?php echo url('/user/logout'); ?>">Odhlásiť sa</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @include('frontend/navigation')
</header>
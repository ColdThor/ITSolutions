<!DOCTYPE html>
<html>
<head>
    <?php
        $helps = \App\Models\Helpdesk::select('*')->where("was_read","=",0)->get();
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | @yield('page')</title>
    <link rel="icon" href='/assets/img/fav.png'>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme//bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('public/admin-theme/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Data tables scripts-->







    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>




    <!-- END of Data tables scripts-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo url('/it-admin/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">ADM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li ><a href="<?php echo url('/'); ?>">Na stránku</a></li>
              @if(session()->has('admin'))
                    <!-- Prijimanie a manažment správ-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><!--ikona s poctom sprav--></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><!--You have 4 messages--></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- start message -->
                                        <?php
                                        $i = 0;
                                        foreach($helps as $help):

                                        $preview = substr($help->text,0,20)." ...";
                                        ?>
                                        <a href="<?php echo url('/it-admin/helpdesk/'.$help->id_helpdesk); ?>">
                                            <div class="pull-left">
                                            <!--
                                                <img src=" {{asset('public/admin-theme//dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                            -->
                                            </div>

                                            <h4>
                                                <!--Odosielatel spravy-->
                                                <small><i class="fa fa-clock-o"></i> <!--Dorucenie> napr. 5 mins--></small>
                                            </h4>

                                            <p><?php echo $preview; ?></p>
                                        </a>
                                    <?php
                                    $i++;
                                    endforeach; ?>

                                        <!-- end message -->
                                        <?php if($i==0): ?>
                                        <p align="center">Žiadne nové správy</p>

                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </li>
                            <!-- e <li class="footer"><a href="#">Zobraziť všetky správy</a></li> -->
                      </ul>
                  </li>
                  <!-- Prijimanie a manažment správ END-->

                    <!-- Notifikácie -->
                    <!--
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><!-- počet notifikácii na ikone</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"></li>
                            <li>
                                <!-- zoznam notifikácii
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                       <li class="footer"><a href="#">Všetky upozornenia</a></li>
                        </ul>
                    </li>

                  -->

                    @endif
                    <!-- Notifikácie -->

                    <!-- používatel-správa profilu/ohlásenie sa -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                          @if(session()->has('admin'))
                                <?php
                                $id = session()->get('userID');
                                ?>
                                <img src="/storage/app/public/admins/admin_<?php echo $id?>/fotka.jpeg" class="img-circle" alt="User Image" style="height: 20px; width: 20px;">
                            @endif
                          @if(session()->has('admin'))
                                <span class="hidden-xs">{{session()->get('userName')}}<!-- Meno pouzivatela--></span>
                            @endif
                        </a>
                        <!-- Popis pouzivatela -->
                        <ul class="dropdown-menu">
                            <li class="user-header">

                              @if(session()->has('admin'))
                                    <?php
                                    $id = session()->get('userID');
                                    ?>
                                    <img src="/storage/app/public/admins/admin_<?php echo $id?>/fotka.jpeg" class="img-circle" alt="User Image" style="height: 100px; width: 100px;">
                                @endif
                                <p>
                                    <!-- meno pouzivatela -->
                                    <small><!-- popis pouzivatela --></small>
                                </p>
                            </li>
                            <!-- tlacidla-->
                          @if(session()->has('admin'))
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo url('/it-admin/profile'); ?>" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">

                                        <a href="<?php echo url('/it-admin/logout'); ?>" class="btn btn-default btn-flat">Odhlásiť sa</a>

                                    </div>
                                </li>
                            @endif
                        </ul>
                    </li>
                    <!-- používatel-správa profilu/ohlásenie sa -->
                </ul>
            </div>
            <!-- Header Navbar: style can be found in header.less -->
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            @include('backend/navigation')
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer">
        @include('backend/footer')
    </footer>
    <!-- jQuery 3 -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


    <!-- DataTables -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>



    <!-- SlimScroll -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-theme/dist/js/demo.js')}}"></script>

</div>
</body>
</html>
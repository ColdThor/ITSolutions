<nav class="navbar navbar-expand-lg  navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url('/'); ?>">
            <img class="logo-menu" src="/reality/assets/img/f_menu_logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li><a href="<?php echo url('/'); ?>">Domov</a></li>
                <li><a href="<?php echo url('/'); ?>#about">O nás</a></li>
                <li><a href="<?php echo url('/'); ?>#contact">Kontakt</a></li>
                <li><a href="<?php echo url('/informacie'); ?>">Užitočné informácie</a></li>
                <div class="dropdown">
                    <li class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton"><a href="">Moje inzeráty</a></li>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo url('/pridat'); ?>">Pridať inzerát</a>
                            <a class="dropdown-item" href="<?php echo url('/moje_inzeraty'); ?>">Moje inzeráty</a>
                        </div>
                </div>
                <li><a href="<?php echo url('/user/login'); ?>">Realitné kancelárie</a></li>
            </ul>
        </div>
    </div>
</nav>









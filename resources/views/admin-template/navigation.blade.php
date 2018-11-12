
<br />


<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron" align="left" >
</div>


<style>
    #liright {
        float:right;
        text-align: right;
    }
</style>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top" >
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="background-color: #02318e;  margin-left: 20px; margin-right: 15px;">
                <li><a href="<?php echo url('/'); ?>">Domov</a></li>
                <li><a href="<?php echo url('/users'); ?>">Používateľia</a></li>
                <li><a href="<?php echo url('/conditions'); ?>">Stavy</a></li>
                <li><a href="<?php echo url('/types'); ?>">Typy</a></li>
                <li><a href="<?php echo url('/specifications'); ?>">Druhy</a></li>
                @if(session()->has('userID'))
                <li id="liright"><a href="#">Odhlásiť sa</a></li>
                    @else:
                <li id="liright"><a href="#">Prihlásiť sa</a></li>
                @endif

            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">



</div> <!-- /container -->
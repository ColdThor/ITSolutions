@include('frontend/header')
@include('frontend/chat')
@section('page') Inzerát @endsection
<br /> <br />
<br /> <br />
<br /> <br />





    <style>
    .mySlides {display:none;}
</style>




<div align="right" style="float: right; margin-right: 30px;">
    <?php if($ad->id_user == session()->get("userID")): ?>
    <a href="<?php echo url('/inzerat/edit/'.$ad->id_advertisement.'/true')?>">Editovať</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('/inzerat/delete/'.$ad->id_advertisement.'/true')?>">Zmazať</a>
        <?php else:
            if($owner == "true"): ?>
        <a href="<?php echo url('/inzerat/edit/'.$ad->id_advertisement.'/true')?>">Editovať</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo url('/inzerat/delete/'.$ad->id_advertisement.'/true')?>">Zmazať</a>
    <?php  endif;   ?>
    <?php endif; ?>

</div>

<br />


<div align="center">

<h1>{{$ad->title}}</h1>
<br />
    <p>
        Popis:
        {{$ad->description}}
    </p>
    <p>
        Stav nehnuteľnosti:
        {{$ad->condition}}
    </p>
    <p>
        Typ inzerátu:
        {{$ad->type}}
    </p>
    <p>
        Druh nehnuteľnosti:
        {{$ad->specification}}
    </p>
    <p>
        Lokalita:
        {{$ad->location2}}
    </p>
    <p>
        Výmera:
        {{$ad->area}}m<sup style="color: black">2</sup>
    </p>

    <p>
        Cena: <h3>{{$ad->price}} €</h3>
    </p>
    <p>
        Datum pridania:
        {{$ad->date}}
    </p>

    <h2>Údaje o inzerujúcom</h2>
    <p>
        Meno a priezvisko: <br />
        {{$ad->user}}
    </p>
    <p>
        Kontakt na mail: <br />
        {{$ad->contact_mail}}
    </p>
    <p>
        Kontakt na telefón: <br />
        <?php if($ad->contact_phone == "" || $ad->contact_phone == null): ?>
         Používateľ nemá uvedené tel. číslo.
        <?php else: ?>
        {{$ad->contact_phone}}
    <?php endif ?>
    </p>

    <h2>Fotogaléria</h2>


<br />





    <div class="w3-content w3-display-container">
        <?php $id= $ad->id_advertisement; $i = 1;
        while(file_exists("storage/inzeraty/inzerat_".$id."/fotka_".$i.".png")):?>
        <img  class="mySlides" src="/reality/storage/app/public/inzeraty/inzerat_{{$ad->id_advertisement}}/fotka_<?php echo $i; ?>.png" alt="Foto1" width="600" height="400">


        <?php
        $i++;
        endwhile; ?>
            <button style="margin-left: 130px" class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button style="margin-right: 130px" class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>



<div class="clearfix"></div>




</div>
<br /> <br />
<br /> <br />

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>




@include('frontend/footer')
@include('frontend/header')
@section('page') Inzerát @endsection

<div class="section-top-border">
    <div class="row pt-30">
        <div class="col-lg-12 col-md-12">
            <h3 class="mb-10">{{$ad->title}}</h3>
            <div class="single-element-widget">
                <h5><span class="lnr lnr-history"></span>Dátum zverejnenia: <b>{{$ad->date}}</b></h5>
                <div class="pt-10">
                <?php if($ad->id_user == session()->get("userID")): ?>
                <a href="<?php echo url('/inzerat/edit/'.$ad->id_advertisement.'/true')?>" class="genric-btn danger-border circle">Editovať</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo url('/inzerat/delete/'.$ad->id_advertisement.'/true')?>" class="genric-btn primary-border circle">Zmazať</a>
                <?php else:
                if($owner == "true"): ?>
                <a href="<?php echo url('/inzerat/edit/'.$ad->id_advertisement.'/true')?>" class="genric-btn danger-border circle">Editovať</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo url('/inzerat/delete/'.$ad->id_advertisement.'/true')?>" class="genric-btn primary-border circle">Zmazať</a>
                <?php  endif;   ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-10">
        <div class="col-lg-7 col-md-7">
            <?php $id= $ad->id_advertisement; $i = 1;
            while(file_exists("storage/inzeraty/inzerat_".$id."/fotka_".$i.".png")):?>
            <img  class="mySlides img-fluid mx-auto" src="/reality/storage/app/public/inzeraty/inzerat_{{$ad->id_advertisement}}/fotka_<?php echo $i; ?>.png" alt="Foto1">
            <?php
            $i++;
            endwhile; ?>
            <div class="gallery-btn">
                <button class="genric-btn danger-border w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="genric-btn danger-border w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <blockquote class="generic-blockquote mt-20">
                {{$ad->description}}</p>
            </blockquote>
        </div>

        <div class="col-lg-5 col-md-5 mt-sm-30">
            <div class="single-element-widget">
                <h4 class="mb-10">Špecifikácia nehnuteľnosti:</h4>
                <h5><span class="lnr lnr-apartment"></span>Druh: <b>{{$ad->specification}}</b></h5>
                <h5><span class="lnr lnr-cog"></span>Stav: <b>{{$ad->condition}}</b></h5>
                <h5><span class="lnr lnr-pushpin"></span>Typ: <b>{{$ad->type}}</b></h5>
                <h5><span class="lnr lnr-crop"></span>Výmera: <b>{{$ad->area}}m<sup>2</sup></b></h5>
                <h5><span class="lnr lnr-map-marker"></span>Lokalita: <b>{{$ad->location2}}</b></h5>
                <h4 id="price">Cena: <b>{{$ad->price}}€</b></h4>
            </div>

            <div class="single-element-widget mt-40">
                <h4 class="mb-10">Inzerujúci:</h4>
                <h5><span class="lnr lnr-user"></span>Meno: <b>{{$ad->user}}</b></h5>
                <h5><span class="lnr lnr-envelope"></span>Email: <b>{{$ad->contact_mail}}</b></h5>
                <?php if($ad->contact_phone == "" || $ad->contact_phone == null): ?>
                <?php else: ?>
                <h5><span class="lnr lnr-phone"></span>Tel. číslo: <b>{{$ad->contact_phone}}</b></h5>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

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
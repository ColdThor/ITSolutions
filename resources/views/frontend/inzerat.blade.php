@include('frontend/header')

@section('page') Inzerát @endsection
<br /> <br />
<br /> <br />
<br /> <br />




<style>
    div.gallery {
        border: 1px solid #ccc;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
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


<?php
        $id= $ad->id_advertisement;
        $i = 1;
while(file_exists("storage/inzeraty/inzerat_".$id."/fotka_".$i.".png")):?>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="/reality/storage/app/public/inzeraty/inzerat_{{$ad->id_advertisement}}/fotka_<?php echo $i; ?>.png">
                <img src="/reality/storage/app/public/inzeraty/inzerat_{{$ad->id_advertisement}}/fotka_<?php echo $i; ?>.png" alt="Foto1" width="600" height="400">
            </a>
        </div>
    </div>
    <?php
    $i++;
    endwhile; ?>





<div class="clearfix"></div>




</div>
<br /> <br />
<br /> <br />




@include('frontend/footer')
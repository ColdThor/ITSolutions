@include('frontend/header')

@section('page') Inzeráty @endsection

<br /> <br />
<br /> <br />
<div align="center">
@if(session()->has('search'))
    <?php $search = session()->get('search');
        $i=0;
    foreach($search as $ads):
            $fotka = $ads->id_advertisement;
       $i++; ?>
        <img align="center" class="img-fluid mx-auto d-block" src="/reality/storage/app/inzeraty/inzerat_<?php echo $fotka ?>/fotka_1.png" alt=""  style="position:relative; left:350px; float:left; height: 20%; width: 20%">
    <div>
        <h1>{{$ads->title}}</h1>
        Popis: {{$ads->description}} <br />
        Dátum zverejnenia: {{$ads->date}} <br />
        Výmera: {{$ads->area}} m<sup style="color: black">2</sup> <br />
        Cena: <span style="color:red" > {{$ads->price}} </span>€ <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
       <?php endforeach;
       if($i==0): ?>

        <h1>Nenašli sa žiadne inzeráty podľa kritérií</h1>
      <?php endif; ?>

    @else
   <script>

       document.location.href="{!! route('search_all'); !!}";
   </script>
@endif

<br /> <br />
<br /> <br />
</div>
@include('frontend/footer')
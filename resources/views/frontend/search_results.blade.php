@include('frontend/header')

@section('page') Inzeráty @endsection

<br /> <br />
<br /> <br />
<div align="center">
@if(session()->has('search'))
    <?php $search = session()->get('search');
        $i=0;
    foreach($search as $ads):
       $i++; ?>
        <img class="img-fluid mx-auto d-block" src="/reality/assets/img/s1.jpg" alt=""  style="margin-left: 20%; float:left">
    <div>
        <h1>{{$ads->title}}</h1>
        Popis: {{$ads->description}} <br />
        Dátum zverejnenia: {{$ads->date}} <br />
        Výmera: {{$ads->area}} m<sup style="color: black">2</sup> <br />
        Cena: <span style="color:red" > {{$ads->price}} </span> <br />
    </div>
       <?php endforeach;
       if($i==0): ?>

        <h1>Nenašli sa žiadne inzeráty podľa kritérií</h1>
      <?php endif; ?>

    @else
   <script>window.location = "/reality/public/";</script>
@endif

<br /> <br />
<br /> <br />
</div>
@include('frontend/footer')
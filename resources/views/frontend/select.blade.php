@include('frontend/header')

@section('page') Výber @endsection
<br /> <br />
<br /> <br />
<div align="center" style="float:left">

    <button onclick="location.href='<?php echo url('/pridat');?>';" class="primary-btn mt-50" name="submit" style="height: 45px; margin-left: 400px" value="submit">Chcem predať<span class="lnr lnr-arrow-right"></span></button>
    <button onclick="location.href='<?php echo url('/search_all');?>';"  class="primary-btn mt-50" name="submit" style="height: 45px; margin-left: 400px" value="submit">Chcem kúpiť<span class="lnr lnr-arrow-right"></span></button>
</div>

<br /> <br />
<br /> <br />
<br /> <br />
<br /> <br />


@include('frontend/footer')

@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')

<br />



<div align="center">
<h1>HLAVNÁ STRÁNKA ADMIN PROSTREDIE PLACEHOLDER</h1>


    @if(session()->has('userID'))
   <h1> Dobrý deň  {{Session::get('userName')}}</h1>
    @endif
</div>
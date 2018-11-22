@extends('frontend/header')
@section('section')<section class="generic-banner relative">@endsection
@section('page') Prihlásenie @endsection
@section('content')

<div class="container pt-100">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="generic-banner-content">

                <h2 class="text-center">Realitná kancelária</h2>
                <form  method="post" action="{{ action ('UserController@dologin') }}">
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="text" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                        <input type="password" name="password" placeholder="Heslo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Heslo'" required class="single-input-accent">
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <button type="submit" class="primary-btn mt-30" name="submit" value="submit">Prihlásiť sa<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<section class=" pb-100 ">
</section>

@endsection
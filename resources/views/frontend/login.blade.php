@include('frontend/header')
@section('page') Prihlásenie @endsection

<div class="container pt-130">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="generic-banner-content">
                <h3 class="text-center">Prihlásiť sa do účtu</h3>
                <form  method="post" action="{{ action ('HomeController@dologin') }}">
                    <div class="input-group-icon mt-30">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-accent">
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
                <div class="d-flex align-items-center justify-content-center mt-30">
                    <div class="row">
                        <p class="sample-text">
                            Nemáte ešte účet?
                            <a href="<?php echo url('user/register'); ?>">
                                <u>Zaregistrujte sa!</u>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <p>
                            <b>
                            {{ $errors->first('no') }}
                            {{ $errors->first('email') }}
                            {{ $errors->first('password') }}
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" pb-100 "></section>
@include('frontend/footer')
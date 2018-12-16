@include('frontend/header')
@include('frontend/chat')
@section('page') Registrácia @endsection


<div class="container pt-70">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="generic-banner-content">
                <h3 class="text-center">Registrácia</h3>
                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <h5>Položky označené s <b>*</b> sú povinné.</h5>
                    </div>
                </div>
                <form  method="post" action="{{ action ('HomeController@doregister') }}">
                    <div class="input-group-icon mt-30">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name="first_name" placeholder="Meno/Názov realitnej kancelárie *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Meno/Názov realitnej kancelárie *'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name="last_name" placeholder="Priezvisko" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Priezvisko'" class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="email" name="email" placeholder="Email *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email *'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <input type="text" name="telephone" placeholder="Telefónne číslo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefónne číslo'" class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                        <input type="password" name="password" placeholder="Heslo *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Heslo'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                        <input type="password" name="password_confirmation" placeholder="Potvrdenie hesla *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Potvrdenie hesla *'" required class="single-input-accent">
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center mt-15">
                        <h5>Registrovať sa ako: <b>*</b></h5>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center mt-10">
                        <div class="row">
                            <select name="user_group" class="app-select form-control" required>
                                <option value="1">Fyzická osoba</option>
                                <option value="3">Realitná kancelária</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <button type="submit" class="primary-btn mt-25" name="submit" value="submit">Registrovať<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="d-flex align-items-center justify-content-center mt-30">
                    <div class="row">
                        <p class="sample-text">
                            <b>
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
<section class=" pb-80 "></section>
@include('frontend/footer')
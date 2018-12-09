@include('frontend/header')
@section('page') Poradenstvo @endsection

<div class="container pt-100 pb-60">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="generic-banner-content">
                <h3 class="text-center">Kontaktovať poradňu</h3>
                {{ Form::open(array('url' => '/ask_helpdesk', 'files' => true)) }}
                    <div class="input-group-icon mt-30">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-accent">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-align-left" aria-hidden="true"></i></div>
                        <textarea class="menu-textarea mt-10" name="text" placeholder="Vaša otázka" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vaša otázka'" required></textarea>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <button type="submit" class="primary-btn mt-30" name="submit" value="submit">Odoslať<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ Form::close() }}

                <div class="d-flex align-items-center justify-content-center mt-10">
                    <div class="row">
                        <p>
                            <b>
                                {{ $errors->first('no') }}
                                {{ $errors->first('email') }}
                                {{ $errors->first('text') }}
                                {{ $errors->first('success') }}
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend/footer')
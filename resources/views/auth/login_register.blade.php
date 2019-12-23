@extends('Frontend.master')
@section('title')
  login page
@endsection
@section('content')
<div style="background-image:url('{{asset('images/borgen-bangladesh.jpg')}}');background-repeat:no-repeat;background-size:cover; background-attachment: fixed;"  >
    <div id="main" class="logintab">
        <div id="tab-btn">
          <a href="#" class="login active" style="text-decoration: none">Sign In</a>
          <a href="#" class="register" style="text-decoration: none">Sign Up</a>
        </div>
        <div class="content">
          <h2>Get Started!</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="inp{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input  id="password" type="password" class="inp{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
        </div>
        <div class="other">
          <h2>Register With Us!</h2>
          <form method="POST" action="{{ route('customregister') }}" >
                @csrf
              <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6 emailcheck">
                        <input id="email" type="email" class="inp emailchecker" name="email" value="{{ old('email') }}" required>
                        <span id="error_email"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="frist_name" class="col-md-4 col-form-label text-md-right">{{ __('Frist Name') }}</label>

                    <div class="col-md-6">
                        <input id="frist_name" type="text" class="inp{{ $errors->has('frist_name') ? ' is-invalid' : '' }}" name="frist_name" value="{{ old('frist_name') }}" required autofocus>

                        @if ($errors->has('frist_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('frist_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="inp{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6 passwordcheck">
                        <input id="registered_password" type="password" class="inp passwordchecker" name="password" required>
                        <span id="error_password"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6 confirmcheck">
                        <input id="password-confirm" type="password" class="inp confirmchecker" name="password_confirmation" required>
                        <span id="error_confirmpassword"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                    <div class="col-md-6">
                        @if ($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                        <select name="dropdowncountry" id="dropdowncountry" class="dropdowncountry from-control col-md-12 p-2" onchange="countrySelect()" >
                            @foreach($countryname as $countrys)
                                <option value='{{ $countrys->id }}'>{{ $countrys->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                    <div class="col-md-6">
                        
                        <select class="state custom-select d-block w-100" id="state" name="state" onchange="stateSelect()" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="city" type="text" class="inp{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus> --}}
                            <select class="city form-control" id="city" name="city"  required>
                                <option value="city">Choose...</option>
                                <option>California</option>
                            </select>
                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="inp{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal_code') }}</label>

                        <div class="col-md-6">
                            <input id="postal_code" type="text" class="inp{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code') }}" required autofocus>
                            @if ($errors->has('postal_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                        <div class="col-md-6">
                            <input id="Phone" type="text" class="inp{{ $errors->has('Phone') ? ' is-invalid' : '' }}" name="Phone" value="{{ old('Phone') }}" required autofocus>

                            @if ($errors->has('Phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('Phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="inp crtbtn">
                            {{ __('Create An Account') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--START EMAIL CHECK BY USING AJAX--}}
<script>
    $(document).ready(function(){
        $('.emailcheck').delegate('.emailchecker','keyup',function(){

            var error_email = '';
            var email = $(this).val();
            var _token = $('#_token').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(!filter.test(email))
            {
                console.log("right");
                $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                // $('#email').addClass('has-error');
                $('.crtbtn').attr('disabled', true);
            }
            else
            {
                $.ajax({
                    // console.log("vbn");
                    url:"{!!URL::to('email_available')!!}",
                    method:"POST",
                    dataType: "json",
                    data:{email:email,_token:_token},
                    success:function(result)
                    {

                        if(result == 'unique')
                        {
                            $('#error_email').css({"display":"none"});
                            // $('#email').removeClass('has-error');
                            $('.crtbtn').attr('disabled', false);
                        }
                        else
                        {
                            $('#error_email').html('<label class="text-danger">Email not Available</label>');
                            // $('#email').addClass('has-error');
                            $('.crtbtn').attr('disabled', true);
                        }
                    },
                    error:function () {
                        console.log("error");
                    }
                })
            }
        });
    });
</script>


{{--END EMAIL CHECK BY USING AJAX--}}
<script type="text/javascript">
    $(document).ready(function(){
        $('.passwordcheck').delegate('.passwordchecker','keyup',function(){

            var password=$(this).val();
            console.log(password);
            if (password.length<8){
                $('#error_password').html('<label class="text-danger">Password Must be Atleast 8 character</label>');
                $('.crtbtn').attr('disabled', true);
            }
            else {
                // $('#error_password').css({"display":"none"});
                $('.crtbtn').attr('disabled', false);
                $('#error_password').html('');

            }
        });
// confirm password

        $('.confirmcheck').delegate('.confirmchecker','keyup',function(){

            var passwords=document.getElementById("registered_password").value;
            var confirmpassword=$(this).val();


            if (passwords==confirmpassword){
                // $('#error_confirmpassword').css({"display":"none"});
                $('.crtbtn').attr('disabled', false);
                $('#error_confirmpassword').html('');
            }
            else {
                $('#error_confirmpassword').html('<label class="text-danger">Password Does Not Match</label>');
                $('.crtbtn').attr('disabled', true);

            }
        });
    });
</script>



@endsection

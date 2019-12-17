<div class="personalInfo">
    @guest
    <div class="login_content" style="padding-top:10%;">
        <div class="text-center">LOGIN </div>
        <div class="login" style="margin:0 auto">
            <form method="POST" action="{{route('customlogin')}}" id="customlogin">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

                <div class="mt-4" style="float: right;padding-right: 70px;position:absolute;right:0px;bottom:10px">
                    <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
                    <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" >Login & Procced</button>
                </div>
            </form>
        </div>
    </div>

    <div class="registration_content" style="padding-top: 3%;margin: 15px;display:none">
        <form method="POST" action="{{ route('userregistration') }}" id="registrationuser">
            @csrf
            
            <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="fristname"> First Name</label>
                    <input type="text" class="form-control" id="fristname" name="fristname" placeholder="" value="" required>
                    @error('fristname')
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1">
                    <label for="lastName"> Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
                    @error('lastname')
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1 emailcheck">
                    <label for="email">Email</label>
                    <input type="email" class="form-control emailchecker" id="email " name="email" placeholder="you@example.com">
                    <span id="error_email"></span>
                    <!--@error('email')-->
                    <!--    <div class="invalid-feedback">-->
                    <!--        <strong>Please enter a valid email address for shipping updates.</strong>-->
                    <!--    </div>-->
                    <!--@enderror-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="country">Countery</label>
                    <select name="dropdowncountry" id="dropdowncountry" class="dropdowncountry from-control col-md-12 p-2" onchange="countrySelect()" >
                        @foreach($countryname as $countrys)
                            <option value='{{ $countrys->id }}'>{{ $countrys->name }}</option>
                        @endforeach
                    </select>
                    @error('dropdowncountry')
                    <div class="invalid-feedback">
                        Valid Country is required.
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-1">
                    <label for="state">State</label>
                    <select class="state custom-select d-block w-100" id="state" name="state" onchange="stateSelect()" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                    Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="city">city</label>
                    <select class="city form-control" id="city" name="city"  required>
                        <option value="city">Choose...</option>
                        <option>California</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name ="zip" placeholder="" required>
                    <div class="invalid-feedback">
                    Zip code required.
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
                    <div class="invalid-feedback">
                        Please enter your Phone Number.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-1 passwordcheck">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="register_password" type="password" class="form-control passwordchecker" name="password" required >
                    <span id="error_password"></span>
                </div>
                <div class="col-md-4 mb-1 confirmcheck">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control confirmchecker" name="password_confirmation" required >
                    <span id="error_confirmpassword"></span>
                </div>
            </div>
            <div class="mt-4" style="float: right;padding-right: 70px;position:absolute;right:0px;bottom:10px">
                {{--<button id="btn">btn</button>--}}
                <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
                <button class="btn btn-primary" id="registarsubmit" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;">Create & Procced</button>
                {{--<button class="btn btn-primary" id="registarsubmit" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;">Create & Procced</button>--}}
                {{--<button class="btn btn-primary" type="submit"  style="border-radius: 0px; padding: 10px 30px 10px 30px;"> & Procced</button>--}}
            </div>
        </form>
    </div>
    @else
        <b>Your Information</b>
        <div class="col-md-12 row">
            <div class="col-md-6 userinfo">
            <p>Frist-Name:</p>
            <span>{{ $user->frist_name }}"</span>
            <p>Last-Name:</p>
            <span> {{ $user->last_name }}</span>
            <p>Email:</p>
            <span> {{ $user->email }}</span>
            <p>phone_no:</p>
            <span>{{ $user->Phone}}</span>
            </div>
            <div class="col-md-6 useraddres">
                <h2>User Address</h2>
                <p>Country: {{ $user->country }}</p>
                <p>State: {{ $user->state }}</p>
                <p>City: {{ $user->city }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>Address: {{ $user->postal_code }}</p>
            </div>
        </div>

        <div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">

            <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
            <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Procced</button>
        </div>
    @endguest
</div>
<div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">
    {{--<button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>--}}
    {{--<button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Logins & Procced</button>--}}
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.passwordcheck').delegate('.passwordchecker', 'keyup', function () {

            var password = $(this).val();
            console.log(password);
            if (password.length < 8) {
                $('#error_password').html('<label class="text-danger">Password Must be Atleast 8 character</label>');
                $('#registarsubmit').attr('disabled', true);
            }
            else {
                $('#error_password').css({"display": "none"});
                $('#registarsubmit').attr('disabled', false);

            }
        });

        $('.confirmcheck').delegate('.confirmchecker','keyup',function(){

            var passwords=document.getElementById("register_password").value;
            var confirmpassword=$(this).val();


            if (passwords==confirmpassword){
                $('#error_confirmpassword').css({"display":"none"});
                $('#registarsubmit').attr('disabled', false);
            }
            else {
                $('#error_confirmpassword').html('<label class="text-danger">Password Does Not Match</label>');
                $('#registarsubmit').attr('disabled', true);

            }
        });
    });

</script>
<script>
    $(function () {
        $("#registrationuser").on("submit",function (e) {
            e.preventDefault();
            var form=$(this);
            var url=form.attr("action");
            var method=form.attr("method");
            var data=form.serialize();


            $.ajax({
                url:url,
                data:data,
                type:method,
                dataType:"JSON",
                success:function (data) {
                    if (data=="success"){
                        swal("Great","successfully inserted","success");
                        document.getElementById("registrationuser").reset();
                        location.reload();
                        next2();
                    }
                    else {
                        swal("OOpps","inserted not success","error");
                    }
                },
                error:function (error) {
                    swal("OOpps","inserted not success error","error");
                }


            })
        })
    });

    // for login user information

    $(function () {
        $("#customlogin").on("submit",function (e) {
            e.preventDefault();
            var form=$(this);
            var url=form.attr("action");
            var method=form.attr("method");
            var data=form.serialize();


            $.ajax({
                url:url,
                data:data,
                type:method,
                dataType:"JSON",
                success:function (data) {
                    if (data=="success"){
                        // swal("Great","successfully inserted","success");
                        document.getElementById("customlogin").reset();
                       
                        next2();
                    }
                    else {
                        swal("OOpps","Login Faild","error");
                    }
                },
                error:function (error) {
                    swal("OOpps","inserted not success error","error");
                }


            })
        })
    });
    
    
</script>

<script>  
    $(document).ready(function(){
        $('.emailcheck').delegate('.emailchecker','keyup',function(){
            
            var error_email = '';
            var email = $(this).val();
            var _token = $('#_token').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           
            if(!filter.test(email))
            {
                $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                console.log("vbn");
                // $('#email').addClass('has-error');
                 $('#registarsubmit').attr('disabled', true);
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
                            $('#error_email').html('<label class="text-success">Email Available</label>');
                            // $('#email').removeClass('has-error');
                            $('#registarsubmit').attr('disabled', false);
                        }
                        else
                        {
                            $('#error_email').html('<label class="text-danger">Email not Available</label>');
                            // $('#email').addClass('has-error');
                            $('#registarsubmit').attr('disabled', true);
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



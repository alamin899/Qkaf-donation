@extends('Frontend.master')
@section('title')
    Home Page
@endsection

@section('content')
    <div class="container" style="min-height:300px">
      <div class="card my-4">
          <div class="card-body">
                <div class="other" style="display:block">
                        <h2>Update Information !</h2>
                        <form method="POST" action="{{ route('user.profile.update') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="inp{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="frist_name" class="col-md-4 col-form-label text-md-right">{{ __('Frist Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="frist_name" type="text" class="inp{{ $errors->has('frist_name') ? ' is-invalid' : '' }}" name="frist_name" value="{{ $user->frist_name }}" placeholder="{{ $user->frist_name }}" required autofocus>

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
                                      <input id="last_name" type="text" class="inp{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ $user->last_name }}" required autofocus>

                                      @if ($errors->has('last_name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('last_name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>


                              <div class="form-group row">
                                  <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                  <div class="col-md-6">
                                      <input id="country" type="text" class="inp{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $user->country }}" required autofocus>

                                      @if ($errors->has('country'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('country') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                  <div class="col-md-6">
                                      <input id="address" type="text" class="inp{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $user->address }}" required autofocus>

                                      @if ($errors->has('address'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('address') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                      <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                      <div class="col-md-6">
                                          <input id="city" type="text" class="inp{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required autofocus>

                                          @if ($errors->has('city'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('city') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                          <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                          <div class="col-md-6">
                                              <input id="state" type="text" class="inp{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $user->state }}" required autofocus>

                                              @if ($errors->has('state'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('state') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal_code') }}</label>

                                      <div class="col-md-6">
                                          <input id="postal_code" type="text" class="inp{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" value="{{ $user->postal_code }}" required autofocus>

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
                                          <input id="Phone" type="text" class="inp{{ $errors->has('Phone') ? ' is-invalid' : '' }}" name="Phone" value="{{ $user->Phone }}" required autofocus>

                                          @if ($errors->has('Phone'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('Phone') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} (Optional)</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="inp{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Update') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
          </div>
      </div>
    </div>
@endsection

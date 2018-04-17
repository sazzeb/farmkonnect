@extends('layouts.auth')

@section('content')

     <body class="account-pages">
<!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-2.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" method="POST" action="{{ route('register') }}" >
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if (session('warning'))
                                    <div class="alert alert-warning">
                                        {{ session('warning') }}
                                    </div>
                                @endif
                                @if (session('danger'))
                                    <div class="alert alert-danger">
                                        {{ session('danger') }}
                                    </div>
                                @endif
                                {{ csrf_field() }}

                                
                                <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Full Name</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter your full name" name="name" aria-label="name" value="{{ old('name') }}" aria-describedby="basic-addon1">
                                            
                                        </div>
                                        <div class="text-danger">
                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1" style="width:90px;">Email</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter email" name="email" aria-label="email" value="{{ old('email') }}" aria-describedby="basic-addon1">
                                            
                                        </div>
                                        <div class="text-danger">
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1" style="width:90px;">Password</span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password" aria-label="password" value="{{ old('password') }}" aria-describedby="basic-addon1">
                                            
                                        </div>
                                        <div class="text-danger">
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1" style="">Comfim Password</span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Comfirm Passowrd" name="password_confirmation" aria-label="password_confirmation" value="{{ old('password_confirmation') }}" aria-describedby="basic-addon1">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row {{ $errors->has('referrer_email') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Referral Email </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Referral Email" name="referrer_email" aria-label="name" value="{{ old('referrer_email') }}" aria-describedby="basic-addon1">
                                            
                                        </div>
                                        <div class="text-danger">
                                                @if ($errors->has('referrer_email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('referrer_email') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox">
                                            <label for="remember">
                                                I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="/login" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        



</div>
@endsection

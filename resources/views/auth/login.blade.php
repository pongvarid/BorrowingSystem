@extends('layouts.app')

@section('content')


<div class="w3-cell-row" style="height:100vh">
    <div class="w3-container box-green w3-cell w3-cell-middle ">
     
            <div class="mrl-60">
                <h3 class="w3-padding-64 wh w3-left"><b class="fs18">ระบบ<br><b class="fs30">ยืมคืนพัสดุของสงฆ์</b></h3>
            </div>
 
    </div>
    <div class="w3-container w3-cell w3-cell-middle">
        <center>
            <div style="width:60%;">

                <div class="w3-card-4">
                    <div class="w3-container w3-green">
                        <h2>Header</h2>
                    </div>

                    <form class="w3-container">

                        <label>First Name</label>
                        <input class="w3-input" type="text">

                        <label>Last Name</label>
                        <input class="w3-input" type="text">

                    </form>

                </div>

            </div>
        </center>

    </div>
</div>



<!----
<div class="container-fluid">
    <div class="row align-items-center"> 
        <div class="col-xs-12 col-md-6">

        </div>
        <div class="col-xs-12 col-md-6 justify-content-center">
            <div class="card ">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

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
            </div>
        </div>
    </div>
</div>
--->


<style>
    .box-green {
        background: rgb(39, 201, 107);
        background: linear-gradient(90deg, rgba(39, 201, 107, 1) 0%, rgba(15, 193, 155, 1) 100%);
    }
</style>

@endsection
@extends('layouts.app')

@section('content')


<div class="w3-cell-row">
    <div class="w3-container box-green w3-cell w3-cell-middle shadow" style="height:100vh">

        <h3 class="mrl-60 wh w3-left w3-text-white"><b class="fs28">ระบบ</b><br><b class="fs40">ยืมคืนพัสดุของสงฆ์</b>
        </h3>

    </div>

    <div class="w3-container w3-center w3-cell w3-cell-middle wal" style="height:100vh">

        <center>
            <div class="w3-card-4 w3-round-xxlarge w3-white" style="width:550px;">
                <div class="w3-container w3-text-green w3-round-xxlarge">
                    <hr class="w3-text-green w3-green">
                    <h2 class="w3-text-green">สมาชิก</h2>
                    <hr class="w3-text-green w3-green">
                </div>
                <!----  <form class="w3-container pd-20" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="w3-left w3-text-orange">

                    </span>
                    <input class=" fs18 w3-input w3-border round"  name="email"   placeholder="ชื่อผู้ใช้" type="text"><br>

                    <input class="fs18 w3-input w3-border round" type="password" name="password" placeholder="รหัสผ่าน" type="text"><br>
                    <button
                        class="w3-button w3-white box-green  w3-round-large round fs18 w3-text-white">เข้าสู่ระบบ</button>

                </form> --->

                <form method="POST" action="{{ route('login') }}" class="pd-40">
                    @csrf
                    <input id="email" type="email"
                        class="fs18 w3-input w3-border round @error('email') is-invalid @enderror" name="email"
                        placeholder="ชื่อผู้ใช้"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input id="password" type="password"
                    placeholder="รหัสผ่าน"
                        class="fs18 mrt-20 w3-input w3-border round @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="form-group row w3-left ">
                        <div class="col-md-6 offset-md-4 ">
                            <div class="form-check ">
                                    <input class="form-check-input mrl-10 mrt-10" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <br> <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit"
                                class="w3-button w3-white box-green  w3-round-large round fs18 w3-text-white" style="width:60%;">
                                {{ __('Login') }}
                            </button> <br> <br>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>

                <br>

            </div>
        </center>
    </div>


</div>

 

<style>
    .box-green {
        background: rgb(39, 201, 107);
        background: linear-gradient(90deg, rgba(39, 201, 107, 1) 0%, rgba(15, 193, 155, 1) 100%);
    }

    .wal{
        background: #5c4242 url(http://p3.isanook.com/tr/0/wb/i/url/p1.s1sf.com/tr/0//ui/187/937457/anu_9414-2-2_1306393083.jpg;c:width=1024,height=768,maintain_ratio=1;static:p_s1sf_tr_0;file:13750a.jpg) no-repeat left top;
background-size: cover;
    }
</style>

@endsection
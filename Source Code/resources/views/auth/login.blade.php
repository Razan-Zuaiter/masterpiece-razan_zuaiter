@extends('layouts.templet')

@section('shop_content')
    <section class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2 style="text-align: center">
                    @if ($title != 'Admin Login')
                        تسجيل الدخول
                    @else
                        Admin Login
                    @endif

                </h2>
                <form action="{{ $loginRoute }}" method="POST" class="login100-form validate-form">
                    @csrf
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif

                    <div class="form-group validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span>البريد الإلكتروني</span>
                        <input class="form-control" type="text" name="email" placeholder="البريد الإلكتروني"
                            value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="form-group validate-input" data-validate="Password is required">
                        <span>الرمز السرّي</span>
                        <input class="form-control" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                تسجيل دخول
                            </button>
                        </div>
                        <div style="font-size:1.2rem;padding:1rem">
                            @if ($title != 'Admin Login')
                                لا تمتلك حسابًا ؟
                                <a href="{{ route('register') }}" class="important-text">
                                    سجّل الان
                                    <img src="https://img.icons8.com/bubbles/25/000000/chevron-left.png" />
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

    @endsection

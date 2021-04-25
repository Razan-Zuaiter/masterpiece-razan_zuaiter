@extends('layouts.templet')

@section('shop_content')

    <section class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2>Login</h2>


                <form action="{{ route('login') }}" method="POST" class="login100-form validate-form">

                    @csrf

                    @if ($errors->has('email'))
                        <div class="pb-5 text-danger">{{ $errors->first('email') }}</div>
                    @endif

                    <div class="form-group validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email addess"
                            value="{{ old('email') }}">

                    </div>


                    <div class="form-group validate-input" data-validate="Password is required">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="*************">

                    </div>


                    <div class="container-login100-form-btn ">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        <p>
                            <br>
                            Don't have an account? <a href="{{ route('register') }}" class="important-text ">
                                Register now

                            </a>
                        </p>

                        {{-- @if ($title != 'Admin Login')
                            
                        @endif --}}

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

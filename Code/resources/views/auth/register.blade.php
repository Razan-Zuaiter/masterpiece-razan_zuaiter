@extends('layouts.templet')

@section('shop_content')

    <section class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2>Register</h2>
                <form action="{{ route('register') }}" method="POST" class="login100-form validate-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group validate-input" data-validate="Valid name is required: example">
                        <label>Full name</label>
                        <input class="form-control" type="text" name="name" placeholder="Full name"
                            value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email addess"
                            value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>


                    <div class="form-group validate-input" data-validate="Password is required">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control" placeholder="Add Image">
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>
                        </div>
                        <p>
                            <br>
                            <a href="{{ url('/login') }}" class="important-text">
                                Login now

                            </a>
                        </p>

                    </div>
                </form>
            </div>
        </div>
        </div>


    @endsection

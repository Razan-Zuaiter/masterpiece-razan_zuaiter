@extends('layouts.templet')

@section('shop_content')

    <section class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2 style="text-align: center">تسجيل مستخدم جديد</h2>
                <form action="{{ route('register') }}" method="POST" class="login100-form validate-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group validate-input" data-validate="Valid name is required: example">
                        <label>الاسم</label>
                        <input class="form-control" type="text" name="name" placeholder="اسمك الكامل"
                            value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>البريد الإلكتروني</label>
                        <input class="form-control" type="text" name="email" placeholder="البريد الإلكتروني"
                            value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>


                    <div class="form-group validate-input" data-validate="Password is required">
                        <label>الرمز االسرّي</label>
                        <input class="form-control" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="form-group validate-input" data-validate="Image is required">
                        <label>صورة</label>
                        <input name="image" type="file" class="form-control" placeholder="يمكن إرفاق صورة" required>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                تسجيل
                            </button>
                        </div>
                        <div style="font-size:1.2rem;padding:1rem">
                            لديك حساب بالفعل ؟ قم
                            <a href="{{ url('/login') }}" class="important-text">
                                تسجيل الدخول
                                <img src="https://img.icons8.com/bubbles/25/000000/chevron-left.png" />
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        </div>


    @endsection

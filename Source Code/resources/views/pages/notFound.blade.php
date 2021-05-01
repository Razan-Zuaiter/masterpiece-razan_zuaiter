@extends('layouts.templet')

@section('shop_content')


    <br>
    <br>
    <div class="jumbotron text-center">

        <h2 style=" font-family: Great Vibes, cursive !important;"> للأسف الكتاب الذي تبحث عنه غير متوفر في <a href="/">نجيب
                🙁</a></h1>
            <h2> جرّب ابحث عن كتاب آخر</h2>
            <a href="/allbook"> عودة للبحث</a>


    </div>


    <script>
        setTimeout(() => {
            window.location.href = "/allbook";
        }, 5000);

    </script>';
    </body>

    </html>

@endsection

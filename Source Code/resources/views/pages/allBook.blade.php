@extends('layouts.templet')
@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>جميع الكتب</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/"> الرئيسة </a>
                            </li>
                            <li>جميع الكتب</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h2>هل ترغب بالبحث عن كتاب ما ؟</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="search" method="post" style="display:flex">
                        @csrf
                        <input type="text" name="search" class="form-control" placeholder="  ادخل عنوان الكتاب لتبحث عنه"
                            autocomplete="off" dir="rtl" />

                        <button type="submit" class="optional-btn"
                            style="display:flex; outline: none; color:white ; border:none ;justify-content:space-between"><img
                                src="https://img.icons8.com/bubbles/50/000000/search.png" /></button>
                    </form>

                </div>
            </div>
        </div>
        <div class=" newsletter-shape">
            <div class="shape-1">
                <img src="assets/img/newsletter/newsletter-shape-1.png" alt="image" />
            </div>
            <div class="shape-2">
                <img src="assets/img/newsletter/newsletter-shape-2.png" alt="image" />
            </div>
        </div>
    </div>
    <section class="class-area pt-100 pb-100">
        <div class="container">
            <div class="title" style="padding-bottom:4rem ; text-align:center">
                <h3> عدد الكتب المتوافرة في نجيب : {{ $books->count() }} كتاب</h3>
            </div>
            <div class="row">
                @foreach ($books->shuffle() as $book => $value)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="{{ route('book.show', $value->book_id) }}">
                                    <img src='{{ asset('images/' . $value->book_image) }}' alt="image"
                                        style="width:28rem;height:20rem" />
                                </a>
                            </div>
                            <div class="class-content">
                                <div class="price" style="text-align: left !important"> {{ $value->book_price }} jod

                                </div>

                                <p style="text-align: left !important"> المؤلف:{{ $value->book_author }}</p>
                                <h3>
                                    <a href="#">{{ $value->book_name }}</a>
                                </h3>

                                <ul class="class-list">
                                    <li>
                                        <span>العمر:</span>
                                        {{ $value->book_age }} سنة
                                    </li>
                                    <li>
                                        <span>عدد الصفحات :</span>
                                        {{ $value->book_pagesNumber }} صفحة
                                    </li>
                                    <li>
                                        <span>اللغة :</span>
                                        {{ $value->book_language }}
                                    </li>
                                    <li>
                                        <span>التصنيف :</span>
                                        {{ $value->category_name }}
                                    </li>
                                </ul>
                                <div class="class-btn" style="align-items: center">
                                    <a href="{{ route('book.show', $value->book_id) }}" class="default-btn">اقرأ
                                        الآن</a>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="class-shape">
            <div class="shape-1">
                <img src="assets/img/class/class-shape-1.png" alt="image" />
            </div>
            <div class="shape-2">
                <img src="assets/img/class/class-shape-2.png" alt="image" />
            </div>
        </div>
    </section>


@endsection

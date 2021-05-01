@extends('layouts.templet')
@section('shop_content')
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>تفاصيل الكتاب</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>تفاصيل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="teacher-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="teacher-details-desc">
                        <h2 class="class-content">{{ $book->book_name }}</h2>

                        <div class="teacher-desc-content">
                            <h3>الوصف</h3>
                            <p>
                                {!! $book->book_description !!}
                            </p>

                            <iframe src="/uploads/{{ $book['upload_file'] }}" width="100%" height="1000px">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="teacher-details-information">
                        <h3>التفاصيل :</h3>
                        <ul>
                            <li>

                                <img src='{{ asset('images/' . $book->book_image) }}' alt="image">
                            </li>

                            <li>
                                <span>المؤلف :</span>
                                {{ $book->book_author }}
                            </li>
                            <li>
                                <span>عدد الصفحات :</span>
                                {{ $book->book_pagesNumber }} صفحة
                            </li>
                            <li>
                                <span>اللغة :</span>
                                {{ $book->book_language }}
                            </li>
                            <li>
                                <span>الفئة العمرية :</span>
                                {{ $book->book_age }}سنين فأكثر
                            </li>
                            <li>
                                <span>التصنيف :</span>
                                <?php print_r($desc[0]['category_name']); ?>
                            </li>
                            <li>
                                <span>رقم الكتاب :</span>
                                {{ $book->book_id }}
                            </li>
                            <li>
                                <span>سعر الكتاب :</span>
                                {{ $book->book_price }} دينار اردني
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between mt-5">

                            <a href="{{ route('cart.show', $book->book_id) }}" class="default-btn"><img
                                    src="https://img.icons8.com/bubbles/50/000000/shopping-bag.png" />
                                اشتر
                                الآن</a>

                            <form action="{{ route('shelves.store') }}" id="contact_form" method="post">
                                {{ csrf_field() }}
                                <input name="user_id" type="hidden" value="{{ Auth::user()->user_id }}" />

                                <input name="book_id" type="hidden" value="{{ $book->book_id }}" />
                                @foreach ($status as $fav)
                                    @if ($fav->book_id == $book->book_id)
                                        @php
                                            $active = true;
                                        @endphp
                                    @endif
                                @endforeach

                                @if ($active)
                                    <input type="hidden" name="fav" value={{ $active }}>
                                    <button type="submit"
                                        style="background:#F5890D; outline: none; color:white ; border:none ; height:5rem ; border-radius:10%">
                                        <img src="https://img.icons8.com/bubbles/50/000000/bookmark-ribbon.png" />تمت
                                        الإضافة
                                    </button>

                                @else
                                    <button type="submit" class="optional-btn"
                                        style="background:#F5890D; outline: none; color:white ; border:none ; height:5rem">
                                        أضف إلى
                                        الرف</button>

                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="class-area bg-fdf6ed pt-100 pb-70">
        <div class="container">
            <div class="section-title">

                <h2>قد ترغب أيضا بتصفح :</h2>
            </div>
            <div class="row">
                @foreach ($more_books->shuffle() as $book => $value)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="{{ route('book.show', $value->book_id) }}">

                                    <img src='{{ asset('images/' . $value->book_image) }}'
                                        style="width: 28rem ; height:20rem">
                                </a>
                            </div>
                            <div class="class-content">
                                <div class="price" style="text-align: left !important"> {{ $value->book_price }} Jod

                                </div>

                                <p style="text-align: left !important"> المؤلف:{{ $value->book_author }}</p>
                                <h3>
                                    <a href="{{ route('book.show', $value->book_id) }}">{{ $value->book_name }}</a>
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
                                        {{-- <span>التصنيف :</span>
                                        <?php print_r($desc[0]['category_name']); ?> --}}
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
    </section>
@endsection

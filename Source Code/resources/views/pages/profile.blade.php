@extends('layouts.templet')
@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>الصفحة الشخصية</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>الصفحة الشخصية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="class-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="class-details-desc">
                        <div class="class-desc-image">
                            <img src="assets/img/gallery/gallery-2.jfif" alt="image Cover">
                        </div>
                        <div class="tab class-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#"> الشراء </a>
                                        </li>
                                        <li>
                                            <a href="#"> الرف </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <h3>الكتب التي قمت بشرائها</h3>
                                                <div class="timetable table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>صورة الكتاب</th>
                                                                <th>اسم الكتاب</th>
                                                                <th>تاريخ الشراء</th>
                                                                <th>تاريخ التوصيل</th>
                                                                <th>سعر الكتاب الواحد</th>
                                                                <th>السعر الكلي</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($userBooks as $value)
                                                                <tr>
                                                                    <td>
                                                                        <img style=" width: 12rem; height: 8rem;"
                                                                            src="/images/{{ $value->book_image }}" alt="">
                                                                    </td>
                                                                    <td>
                                                                        {{ $value->book_name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ date('d-m-Y', strtotime($value->created_at)) }}

                                                                    </td>
                                                                    <td>
                                                                        {{ $value->ship_date }}
                                                                    </td>
                                                                    <td>
                                                                        JOD {{ $value->book_price }}

                                                                    </td>
                                                                    <td>
                                                                        JOD {{ $value->total }}
                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <div class="class-desc-content">
                                                    <h3>الكتب التي قمت باضافتها الى الرف</h3>
                                                    <div class="row">
                                                        {{-- {{ $userShelves }} --}}
                                                        @foreach ($userShelves as $userShelve)
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-class">
                                                                    <div class="class-image">
                                                                        <a
                                                                            href="{{ route('book.show', $userShelve->book_id) }}">
                                                                            <img src="
                                                                                                                                            images/{{ $userShelve->book_image }}"
                                                                                alt="image"
                                                                                style="width:28rem;height:20rem" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="class-content">
                                                                        <div class="price"
                                                                            style="text-align: left !important">
                                                                            {{ $userShelve->book_price }} jod

                                                                        </div>

                                                                        <p style="text-align: left !important">
                                                                            المؤلف:{{ $userShelve->book_author }}
                                                                        </p>
                                                                        <h3>
                                                                            <a href="#">{{ $userShelve->book_name }}</a>
                                                                        </h3>

                                                                        <ul class="class-list">
                                                                            <li>
                                                                                <span>العمر:</span>
                                                                                {{ $userShelve->book_age }} سنة
                                                                            </li>
                                                                            <li>
                                                                                <span>عدد الصفحات :</span>
                                                                                {{ $userShelve->book_pagesNumber }}
                                                                                صفحة
                                                                            </li>
                                                                            <li>
                                                                                <span>اللغة :</span>
                                                                                {{ $userShelve->book_language }}
                                                                            </li>

                                                                        </ul>
                                                                        <div class="class-btn" style="align-items: center">
                                                                            <a href="{{ route('book.show', $userShelve->book_id) }}"
                                                                                class="default-btn">اقرأ
                                                                                الآن</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="class-desc-content">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="class-details-information">
                        <h3>معلوماتك</h3>
                        <ul>
                            <li>
                                <img src="{{ $userId->image }}" alt="image" style=" width: 12rem; height: 8rem;" />
                            </li>
                            <li>
                                <span>الاسم : </span>
                                {{ $userId->name }}
                            </li>
                            <li>
                                <span>عدد الكتب التي اشتريتها : </span>
                                {{ $userBooks->count() }} كتاب
                            </li>
                            <li>
                                <span>عدد الكتب التي اضفتها للرف :</span>
                                {{ $userShelves->count() }} كتاب
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

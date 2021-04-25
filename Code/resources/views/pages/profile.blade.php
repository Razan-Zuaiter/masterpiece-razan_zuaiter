@extends('layouts.templet')

@section('shop_content')
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>About</li>
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
                            <img src="assets/img/class-details.jpg" alt="image">

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
                                        <li>
                                            <a href="#"> تعديل المعلومات </a>
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
                                                                <th>السعر الكتاب الواحد</th>
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
                                                        @foreach ($userShelves as $userShelve)
                                                            {{-- {{ $userShelves->first()->book_name }} --}}
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="single-class">
                                                                    <div class="class-image">
                                                                        <a href="#">
                                                                            <img src="images/{{ $userShelves->first()->book_image }}"
                                                                                alt="image"
                                                                                style="width:20rem;height:20rem" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="class-content">
                                                                        <div class="price"
                                                                            style="text-align: left !important">
                                                                            {{ $userShelves->first()->book_price }} jod

                                                                        </div>

                                                                        <p style="text-align: left !important">
                                                                            المؤلف:{{ $userShelves->first()->book_author }}
                                                                        </p>
                                                                        <h3>
                                                                            <a
                                                                                href="#">{{ $userShelves->first()->book_name }}</a>
                                                                        </h3>

                                                                        <ul class="class-list">
                                                                            <li>
                                                                                <span>العمر:</span>
                                                                                {{ $userShelves->first()->book_age }} سنة
                                                                            </li>
                                                                            <li>
                                                                                <span>عدد الصفحات :</span>
                                                                                {{ $userShelves->first()->book_pagesNumber }}
                                                                                صفحة
                                                                            </li>
                                                                            <li>
                                                                                <span>اللغة :</span>
                                                                                {{ $userShelves->first()->book_language }}
                                                                            </li>

                                                                        </ul>
                                                                        <div class="class-btn" style="align-items: center">
                                                                            <a href="{{ route('book.show', $userShelves->first()->book_id) }}"
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
                                {{-- {{ count($userBooks->first()->order_id) }} --}}
                            </li>
                            <li>
                                <span>عدد الكتب التي اضفتها للرف :</span>
                                {{ $userId->name }}
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="logo">
                            <h2>
                                <a href="index.html">Ketan</a>
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>
                        <ul class="footer-contact-info">
                            <li>
                                <i class="bx bxs-phone"></i>
                                <span>Phone</span>
                                <a href="tel:882569756">882-569-756</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <span>Email</span>
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#fe969b929291be959b8a9f90d09d9193"><span
                                        class="__cf_email__"
                                        data-cfemail="274f424b4b48674c425346490944484a">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="bx bx-map"></i>
                                <span>Address</span>
                                175 5th Ave Premium Area, New York, NY 10010, United States
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Activities</h3>
                        <ul class="quick-links">
                            <li>
                                <a href="#">Maths Olympiad</a>
                            </li>
                            <li>
                                <a href="#">Art Competition</a>
                            </li>
                            <li>
                                <a href="#">English Novels</a>
                            </li>
                            <li>
                                <a href="#">Science Competition</a>
                            </li>
                            <li>
                                <a href="#">Teachers Day</a>
                            </li>
                            <li>
                                <a href="#">World Kids Day</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Photo Gallery</h3>
                        <ul class="photo-gallery-list">
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-4.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-5.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-6.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image" />
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

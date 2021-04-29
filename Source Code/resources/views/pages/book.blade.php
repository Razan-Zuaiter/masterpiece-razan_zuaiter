@extends('layouts.templet')

@section('shop_content')
    <h2>{{ $book->book_name }}</h2>
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>تقاصيل الكتاب</h2>
                        <ul>
                            <li>
                                <a href="index.html">الرئيسة</a>
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
                        <img src="./../images/{{ $book->book_image }}" alt="image">
                        <div class="teacher-desc-image">
                        </div>
                        <div class="teacher-desc-content">
                            <h3>{{ $book->book_name }}</h3>
                            <p>
                                {{ $book->book_description }}
                            </p>

                            <iframe src="./uploads/{{ $book['upload_file'] }}" width="100%" height="500px">
                            </iframe>
                            {{-- <h3>Teacher Skills</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p> --}}
                            <div class="skill-bar" data-percentage="95%">
                                <p class="progress-title-holder">
                                    <span class="progress-title">Teaching Skills</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </p>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                            <div class="skill-bar" data-percentage="85%">
                                <p class="progress-title-holder">
                                    <span class="progress-title">Speaking</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </p>
                                <div class="progress-content-outter">
                                    <div class="progress-content two"></div>
                                </div>
                            </div>
                            <div class="skill-bar" data-percentage="75%">
                                <p class="progress-title-holder">
                                    <span class="progress-title">Communication Skill</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </p>
                                <div class="progress-content-outter">
                                    <div class="progress-content three"></div>
                                </div>
                            </div>
                            <div class="skill-bar" data-percentage="65%">
                                <p class="progress-title-holder">
                                    <span class="progress-title">Follow The Rules</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </p>
                                <div class="progress-content-outter">
                                    <div class="progress-content four"></div>
                                </div>
                            </div>
                            <div class="skill-bar" data-percentage="70%">
                                <p class="progress-title-holder">
                                    <span class="progress-title">Child Care Skills</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </p>
                                <div class="progress-content-outter">
                                    <div class="progress-content five"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="teacher-details-information">
                        <h3>Profile Details</h3>
                        <ul>
                            <li>
                                <span>التصنيف :</span>
                                <?php print_r($desc[0]['category_name']); ?>
                            </li>
                            <li>
                                <span>رقم الكتاب</span>
                                {{ $book->book_id }}
                            </li>
                            <li>
                                <span>المؤلف :</span>
                                {{ $book->book_author }}
                            </li>
                            <li>
                                <span>عدد الصفحات :</span>
                                {{ $book->book_pagesNumber }}
                            </li>
                            <li>
                                <span>اللغة :</span>
                                {{ $book->book_language }}
                            </li>
                            <li>
                                <span>الفئة العمرية :</span>
                                {{ $book->book_age }}
                            </li>
                            <li>
                                <span>Contact:</span>
                                <a href="#"><i class="bx bxl-google-plus"></i></a>
                                <a href="#"><i class="bx bxl-facebook"></i></a>
                                <a href="#"><i class="bx bxl-twitter"></i></a>
                                <a href="#"><i class="bx bxl-linkedin"></i></a>
                                <a href="#"><i class="bx bxl-instagram"></i></a>
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
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#1d75787171725d7678697c73337e7270"><span
                                        class="__cf_email__"
                                        data-cfemail="375f525b5b58775c524356591954585a">[email&#160;protected]</span></a>
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

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © 2021 Ketan. All Rights Reserved by
                    <a href="https://envytheme.com/" target="_blank"> EnvyTheme </a>
                </p>
            </div>
        </div>
    </div>

    <div class="go-top">
        <i class="bx bx-up-arrow-alt"></i>
    </div>

@endsection

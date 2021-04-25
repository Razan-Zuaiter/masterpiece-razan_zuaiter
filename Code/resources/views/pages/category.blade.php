@extends('layouts.templet')

@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Class</h2>
                        <ul>
                            <li>
                                <a href="index.html"> جميع التصنيفات</a>
                            </li>
                            <li>Class</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="class-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="row">
                    <section class="event-area event-item-two pt-100 pb-70">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach ($categories->shuffle() as $category => $value)
                                    <div class="col-lg-6">
                                        <div class="event-box-item">
                                            <div class="row align-items-center">
                                                <div class="col-md-3">
                                                    <div class="event-image">
                                                        <a href="#"><img src="images/{{ $value->category_image }}"
                                                                alt="image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="event-content">
                                                        <h3>
                                                            <a href="/category">{{ $value->category_name }}</a>
                                                        </h3>
                                                        <p>
                                                            {!! $value->category_description !!}
                                                        </p>
                                                        {{-- <span>3-8 Months 8:00 AM - 11:00 PM</span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="blog-btn">
                                                        <a href="{{ route('category.show', $value->category_id) }}"
                                                            class="default-btn" class="default-btn">اكتشف المزيد</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>


                </div>
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
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b0d8d5dcdcdff0dbd5c4d1de9ed3dfdd"><span
                                        class="__cf_email__"
                                        data-cfemail="fd9598919192bd9698899c93d39e9290">[email&#160;protected]</span></a>
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

@extends('layouts.templet')

@section('shop_content')
    <div class="main-banner">
        <div class="main-banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    {{-- <span>نجيب</span> --}}
                                    <h1> لنكتشف عالما مليئا بالسحر و الخيال و المتعة </h1>
                                    <p>
                                        نجيب هو رفيقك في عالم القراءة ذلك المكان السحري الذي سيغر حياتك للأبد </p>
                                    <div class="banner-btn">
                                        <a href="/allbook" class="default-btn"> اكتشف المزيد </a>
                                        <a href="/about" class="optional-btn"> من نحن ؟ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="assets/img/main-banner/education-girl.png" alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape">
            <div class="banner-bg-shape">
                <img src="assets/img/main-banner/banner-bg-shape-1.png" alt="image" />
            </div>
            <div class="shape-1">
                <img src="assets/img/main-banner/banner-shape-1.png" alt="image" />
            </div>
            <div class="shape-2">
                <img src="assets/img/main-banner/banner-shape-2.png" alt="image" />
            </div>
            <div class="shape-3">
                <img src="assets/img/main-banner/banner-shape-3.png" alt="image" />
            </div>
            <div class="shape-4">
                <img src="assets/img/main-banner/banner-shape-4.png" alt="image" />
            </div>
        </div>
    </div>
    <section class="who-we-are ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-image">
                        <img src="assets/img/who-we-are/who-we-are.jpg" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>من نحن ؟</span>
                        <h3>ما هو نجيب؟</h3>
                        <p>
                            مرخبا
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul class="who-we-are-list">
                            <li>
                                <span>1</span>
                                Homelike Environment
                            </li>
                            <li>
                                <span>2</span>
                                Quality Educators
                            </li>
                            <li>
                                <span>3</span>
                                Safety and Security
                            </li>
                            <li>
                                <span>4</span>
                                Play to Learn
                            </li>
                        </ul>
                        <div class="who-we-are-btn">
                            <a href="#" class="default-btn">مشاهدة المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="who-we-are-shape">
            <img src="assets/img/who-we-are/who-we-are-shape.png" alt="image" />
        </div>
    </section>

    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>تصنيفات الكتب</span>
                <h2>ما هو المجال الذي تفضله ؟</h2>
            </div>
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
    </section>

    <section class="value-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="value-image">
                        <img src="assets/img/value/value-1.png" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="value-item">
                        <div class="value-content">
                            <span>اهدافنا</span>
                            <h3>نحن نمح الأطفال مساحة امنة و ممتعة</h3>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span>01</span>
                            </div>
                            <h4>Active Learning</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-2">02</span>
                            </div>
                            <h4>Safe Environment</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-3">03</span>
                            </div>
                            <h4>Fully Equipment</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Anmiation --}}
        <div class="value-shape">
            <div class="shape-1">
                <img src="assets/img/value/value-shape-1.png" alt="image" />
            </div>
            <div class="shape-2">
                <img src="assets/img/value/value-shape-2.png" alt="image" />
            </div>
            <div class="shape-3">
                <img src="assets/img/value/value-shape-3.png" alt="image" />
            </div>
        </div>
    </section>

    <section class="class-area bg-fdf6ed pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>الكتب</span>
                <h2>الكتب الأكثر شيوعا</h2>
            </div>
            <div class="row">
                @foreach ($books->shuffle() as $book => $value)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="images/{{ $value->book_image }}" alt="image"
                                        style="width:25rem;height:20rem" />
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
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-2.jpg" alt="image" />
                            </a>
                        </div>
                        <div class="class-content">
                            <div class="price">$790</div>
                            <h3>
                                <a href="#">Learning Disciplines</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    3-5 Year
                                </li>
                                <li>
                                    <span>Time:</span>
                                    8-10 AM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    25
                                </li>
                            </ul>
                            <div class="class-btn">
                                <a href="#" class="default-btn">Join Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-3.jpg" alt="image" />
                            </a>
                        </div>
                        <div class="class-content">
                            <div class="price">$590</div>
                            <h3>
                                <a href="#">Drawing</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    3-5 Year
                                </li>
                                <li>
                                    <span>Time:</span>
                                    8-10 AM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    25
                                </li>
                            </ul>
                            <div class="class-btn">
                                <a href="#" class="default-btn">Join Class</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
    {{-- Viedo --}}
    <section class="class-area bg-fdf6ed pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>شاهد </span>
                <h2>فيدوهات </h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="class-content">
                            <div class="price" style="text-align: left !important">

                            </div>

                            <p style="text-align: left !important"> المؤلف:</p>
                            <h3>
                                <a href="#"></a>
                            </h3>


                            {{-- <div class="class-btn" style="align-items: center">
                                <a href="{{ route('book.show', $value->book_id) }}" class="default-btn">اقرأ
                                    الآن</a>
                            </div> --}}

                        </div>
                    </div>
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
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#573f323b3b38173c322336397934383a"><span
                                        class="__cf_email__"
                                        data-cfemail="2b434e4747446b404e5f4a4505484446">[email&#160;protected]</span></a>
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

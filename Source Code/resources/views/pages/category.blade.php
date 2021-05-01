@extends('layouts.templet')

@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>التصنيفات</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>تصنيفات</li>
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


@endsection

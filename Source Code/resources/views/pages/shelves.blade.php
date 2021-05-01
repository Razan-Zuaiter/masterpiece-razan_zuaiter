@extends('layouts.templet')
@section('shop_content')
    <div class="page-banner-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>الكتب في رفّك</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>رفّي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="event-area event-item-two pt-100 pb-70 ">
        <h3 style="text-align: center ; padding-bottom:2rem"> الكتب التي أضفتها إلى رفّك </h3>
        <div class="container-fluid">
            <div class="row">
                @if ($shelves->count() == 0)
                    <div style="text-align: center ;font-size:1.5rem">
                        <h3 style="color:red">لا يوجد كتب في رفك حاليًا,لذلك قم باكتشاف كتبٍ جديدة</h3>
                        <img src="assets/img/gallery/gallery-1.jfif" alt="image">
                        <p style="font-size:1.5rem"><a href="/allbook">عودة إلى صفحة الكتب </a></p>
                    </div>
                @else
                    @foreach ($shelves as $shelve)
                        <div class="col-lg-2 col-md-4">
                            <div class="single-class">
                                <div class="class-image">
                                    <a href="{{ route('book.show', $shelve->book->first()->book_id) }} ">
                                        <img src="images/{{ $shelve->book->first()->book_image }}" alt="image"
                                            style="width:15rem;  height:15rem;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

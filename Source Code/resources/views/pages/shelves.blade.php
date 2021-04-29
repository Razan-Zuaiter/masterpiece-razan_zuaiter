@extends('layouts.templet')

@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>الكتب في رفّك</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            |
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
            </div>
        </div>
    </section>
    {{-- {{ $shelves->first()->book->first()->book_name }} --}}
    {{-- {{ $shelve->book->first()->book_name }} --}}
@endsection

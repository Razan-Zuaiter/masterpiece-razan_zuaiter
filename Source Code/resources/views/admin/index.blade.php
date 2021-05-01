@extends('layouts.app')
@section('content')


    <div class="col-lg-12">
        <div class="card " style="">
            <div class="card-body card-block" style="display: flex">
                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3> {{ $books }}</h3>
                            <p>Total Books Published </p>
                        </div>
                        <div class="icon">
                            <img src="https://img.icons8.com/bubbles/50/000000/books.png" />
                        </div>
                        <a href="{{ url('/admin/manageBook') }}" style="text-align: center ;color:rgb(148, 104, 22) "><img
                                src="https://img.icons8.com/bubbles/25/000000/chevron-left.png" />More info </a>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $orders }}<sup style="font-size: 20px"></sup></h3>
                            <p>Books Bought</p>
                        </div>
                        <div class="icon">
                            <img src="https://img.icons8.com/bubbles/50/000000/cash-register.png" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body card-block" style="display: flex">

                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $admins }}<sup style="font-size: 20px"></sup></h3>
                            <p>Total Admins</p>
                        </div>
                        <div class="icon">
                            <img src="https://img.icons8.com/bubbles/50/000000/admin-settings-male.png" />
                        </div>
                        <a href="{{ url('/admin/manageAdmins') }}"
                            style="text-align: center ;color:rgb(148, 104, 22)"><img
                                src="https://img.icons8.com/bubbles/25/000000/chevron-left.png" />More info</a>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $users }}</h3>
                            <p>Total User</p>
                        </div>
                        <div class="icon">
                            <img src="https://img.icons8.com/bubbles/50/000000/group.png" />
                        </div>
                        <a href="{{ url('/admin/manageUser') }}" style="text-align: center ;color:rgb(148, 104, 22)"><img
                                src="https://img.icons8.com/bubbles/25/000000/chevron-left.png" />More info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

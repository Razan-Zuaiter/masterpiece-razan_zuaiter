@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">

                    <p>Total Complaints</p>
                </div>
                <div class="icon">
                    <i class="fa fa-comments"></i>
                </div>
                {{-- <a href="{{url('/admin/manageComplaint')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div><!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $users }}<sup style="font-size: 20px"></sup></h3>
                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ url('/admin/manageUsers') }}" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    {{-- <h3>{{ $resolved }}</h3> --}}
                    <p>Complaints Solve</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                {{-- <a href="{{url('/admin/manageComplaint')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-horizontal" action="/admin" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h4 class="modal-title">Admin Form</h4>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="inputEmail3"
                                        placeholder="Full name" value="{{ old('name') }}" />
                                    @if ($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="inputEmail3"
                                        placeholder="example@gmail.com" value="{{ old('email') }}" />
                                    @if ($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="inputEmail3"
                                        placeholder="********" />
                                    @if ($errors->has('password'))
                                        <div class="text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" type="file" class="form-control" id="inputEmail3" />
                                    @if ($errors->has('image'))
                                        <div class="text-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

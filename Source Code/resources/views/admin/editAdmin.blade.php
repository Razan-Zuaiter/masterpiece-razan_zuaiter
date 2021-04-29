@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-horizontal" action="{{ route('admin.manageAdmins.update', $admin->id) }}"
                        method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h4 class="modal-title">Admin Form</h4>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="inputEmail3"
                                        placeholder="Full name" value="{{ $admin->name }}" />
                                    @if ($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="inputEmail3"
                                        placeholder="example@gmail.com" value="{{ $admin->email }}" />
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

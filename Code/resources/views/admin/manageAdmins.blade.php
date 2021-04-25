@extends('layouts.apps')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Create Admin</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="box-header">
                            <h3 class="box-title">Admin Management Table</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">Profile</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>
                                                <center><img src={{ asset("images/$admin->image") }} width="30"
                                                        class="user-image" alt="User Image" /></center>
                                            </td>
                                            <td>{{ $admin->name }}</td>
                                            <td><i style="color:blue">{{ $admin->email }}</i></td>
                                            <td class="d-flex">
                                                <a href="{{ route('admin.manageAdmins.edit', $admin->id) }}"><button
                                                        class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit"><i class="fa fa-edit"></i></button></a>
                                                <form action="{{ route('admin.manageAdmins.destroy', $admin->id) }}"
                                                    method="post" style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

        </div>
    </div>
@stop

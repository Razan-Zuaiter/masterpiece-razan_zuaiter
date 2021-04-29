@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="box-header">
                    <h3 class="box-title">User Management Table</h3>
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

                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <center><img src={{ asset("images/$user->image") }} width="30" class="user-image"
                                                alt="User Image" /></center>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td><i style="color:blue">{{ $user->email }}</i></td>
                                    <td>
                                        <form action="{{ route('admin.manageUsers.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center">
                        {{ $users->links() }}
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

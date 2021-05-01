@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">View User</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- DATA TABLE -->

                <div class="table-responsive table-responsive-data2">
                    <table id="example1" class="table table-data2">
                        <thead>
                            <tr>
                                <th width="10%">Image</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <img src='{{ asset($user->image) }}' alt="User Image" />
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</i></td>
                                    <td>
                                        <form action="{{ route('admin.manageUser.destroy', $user->user_id) }}"
                                            method="post">
                                            @csrf
                                            @method(' DELETE') <button type="submit" class="item" data-toggle="tooltip"
                                                data-placement="top" title="Delete">
                                                <img src="https://img.icons8.com/bubbles/50/000000/delete-forever.png" />
                                            </button>
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

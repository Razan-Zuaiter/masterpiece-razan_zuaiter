@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Create New admin</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form action="manageAdmins" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Full name"
                                value="{{ old('name') }}" />
                            @if ($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon ">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>

                            <input name="email" type="email" class="form-control" id="inputEmail3"
                                placeholder="example@gmail.com" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>

                            <input name="password" type="password" class="form-control" id="inputEmail3"
                                placeholder="********" />
                            @if ($errors->has('password'))
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>

                            <input name="image" type="file" class="form-control" id="inputEmail3" />
                            @if ($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif

                        </div>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn-sm" name="submit"
                            style="background:#F5890D; outline: none; color:white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Books table</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th width="10%">Image</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($admins as $admin)
                                <tr>
                                    <td>
                                        <center><img src={{ asset("images/$admin->image") }} width="30" class="user-image"
                                                alt="User Image" /></center>
                                    </td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</i></td>
                                    <td>
                                        <a href="{{ route('admin.manageAdmins.edit', $admin->id) }}">
                                            <button class="item" data-placement="top" title="Edit">
                                                <img
                                                    src="https://img.icons8.com/bubbles/50/000000/edit-file.png" /></button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.manageAdmins.destroy', $admin->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <img src="https://img.icons8.com/bubbles/50/000000/delete-forever.png" />
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
@endsection

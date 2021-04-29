@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Update Admin</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form action="{{ route('manageUser.update', $User->user_id) }}" method="post" class=""
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="name" value="{{ $User->name }}" name="name" placeholder="user Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="email" id="email" value="{{ $User->email }}" name="email" placeholder="email"
                                class="form-control">
                        </div>
                    </div>
                    <select type="text" name="role" placeholder="User Type" class="form-control">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="password" id="password" value="{{ $User->password }}" name="password"
                            placeholder="passwords" class="form-control">
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                    </div>
                    <input type="file" id="image" value="images/{{ $User->image }}" name="image" placeholder="user image"
                        class="form-control">

                </div>
            </div>

            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Update
                </button>
            </div>
            </form>
        </div>
    </div>

    </div>
@stop

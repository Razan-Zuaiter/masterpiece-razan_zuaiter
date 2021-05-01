@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Update Admin information</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form class="form-horizontal" action="{{ route('admin.manageAdmins.update', $admin->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Full name"
                                value="{{ $admin->name }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon ">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                            <input name="email" type="email" class="form-control" id="inputEmail3"
                                placeholder="example@gmail.com" value="{{ $admin->email }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input name="password" type="password" class="form-control" id="inputEmail3"
                                placeholder="********" value="{{ $admin->password }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input name="image" type="file" class="form-control" id="inputEmail3" />
                        </div>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn-sm" name="submit"
                            style="background:#F5890D; outline: none; color:white">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    @endsection

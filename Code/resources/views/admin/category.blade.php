@extends('layouts.app')
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
            <div class="card-body card-block">
                <form action="category" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="category_name" name="category_name" placeholder="Category Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="category_level" name="category_description" placeholder="Level"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                            <input name="category_image" type="file" class="form-control" placeholder="Add Image">
                        </div>
                    </div>
                    {{-- added --}}
                    {{-- <div class="form-actions form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                            <input name="upload_file" type="file" class="form-control" id="upload_file">

                        </div>
                    </div> --}}
                    {{-- added --}}
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-success btn-sm" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Category Table</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category name</th>
                                <th>category description</th>
                                <th>Category Image</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="tr-shadow">
                                    <td>{{ $category['category_id'] }}</td>

                                    <td>{{ $category['category_name'] }}</td>
                                    <td>
                                        {{ $category['category_description'] }}
                                    </td>
                                    <td>
                                        <div class="image img-cir img-40">
                                            <img src="images/{{ $category->category_image }}">
                                        </div>
                                    </td>


                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <a href="{{ route('category.edit', $category->category_id) }}">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i> </button>
                                            </a>
                                        </div>
                                    <td>
                                        <form action="{{ route('category.destroy', $category->category_id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i> </button>
                                        </form>
                                    </td>




                                </tr>
                                <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
@stop

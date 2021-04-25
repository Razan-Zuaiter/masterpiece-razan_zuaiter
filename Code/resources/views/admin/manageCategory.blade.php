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
                <form action="manageCategory" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input type="text" id="category_name" name="category_name" placeholder="Category Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                            <textarea class="ckeditor form-control" name="category_description" type="text"></textarea>
                            {{-- <input type="text" id="category_level"  name="wysiwyg-editor"
                                placeholder="Category Description" class="form-control"> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/picture.png" />
                            </div>
                            <input name="category_image" type="file" class="form-control" placeholder="Add Category Image">
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
                        <button type="submit" class="btn-sm" name="submit"
                            style="background:#F5890D; outline: none; color:white">Submit</button>
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
                                <th>Category image</th>
                                <th>Category edit</th>
                                <th>Category delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="tr-shadow">
                                    <td>{{ $category['category_id'] }}</td>

                                    <td>{{ $category['category_name'] }}</td>
                                    <td>
                                        {!! $category->category_description !!}
                                    </td>
                                    <td>

                                        <img src="images/{{ $category->category_image }}"
                                            style="width: 5rem ; height:5rem">

                                    </td>
                                    <td>
                                        <a href="{{ route('manageCategory.edit', $category->category_id) }}">
                                            <button class="item" data-placement="top" title="Edit">
                                                <img
                                                    src="https://img.icons8.com/bubbles/50/000000/edit-file.png" /></button>
                                        </a>

                                    </td>
                                    <td>
                                        <form action="{{ route('manageCategory.destroy', $category->category_id) }}"
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

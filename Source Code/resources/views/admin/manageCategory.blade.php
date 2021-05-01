@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Create Category</div>
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
                        <div>
                            <div class="input-group-addon ">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                        </div>
                        <textarea id='article-ckeditor' name="category_description"
                            class="form-control">{{ old('category_description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/picture.png" />
                            </div>
                            <input name="category_image" type="file" class="form-control" placeholder="Add Category Image">
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

                                        <img src='{{ asset('images/' . $category->category_image) }}'
                                            style="width: 5rem ; height:5rem">

                                    </td>
                                    <td>
                                        <a href="{{ route('admin.manageCategory.edit', $category->category_id) }}">
                                            <button class="item" data-placement="top" title="Edit">
                                                <img
                                                    src="https://img.icons8.com/bubbles/50/000000/edit-file.png" /></button>
                                        </a>

                                    </td>
                                    <td>
                                        <form action="{{ route('admin.manageCategory.destroy', $category->category_id) }}"
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

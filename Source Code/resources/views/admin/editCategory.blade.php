@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Update Category</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form action="{{ route('admin.manageCategory.update', $category->category_id) }}" method="post" class=""
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input type="text" id="category_name" value="{{ $category->category_name }}"
                                name="category_name" placeholder="Category Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="input-group-addon ">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                            <textarea class="ckeditor form-control"
                                name="category_description">{!! $category->category_description !!}</textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/picture.png" />
                            </div>
                            <input type="file" id="category_image" value="images/{{ $category->category_image }}"
                                name="category_image" placeholder="category image" class="form-control">

                        </div>
                    </div>

                    <div class="form-actions form-group">
                        <button type="submit" class="btn-sm" name="submit"
                            style="background:#F5890D; outline: none; color:white">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop

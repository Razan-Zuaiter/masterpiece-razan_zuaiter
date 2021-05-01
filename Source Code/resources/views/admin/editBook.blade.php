@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Update Book</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form action="{{ route('admin.manageBook.update', $Book->book_id) }}" method="post" class=""
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input type="text" id="book_name" name="book_name" placeholder="book Name" class="form-control"
                                value="{{ $Book->book_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/opened-folder.png" />
                            </div>
                            <select type="text" name="category_id" placeholder="Category" class="form-control"
                                style="height: 4rem">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_id }}"> {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                            <textarea class="form-control" name="book_description"
                                type="text">{!! $Book->book_description !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/price-tag.png" />
                            </div>
                            <input type="text" id="book_price" name="book_price" placeholder="Book_price"
                                class="form-control" value="{{ $Book->book_price }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/continuous-mode.png" />
                            </div>
                            <input type="text" id="book_pagesNumber" name="book_pagesNumber" placeholder="book_pagesNumber"
                                class="form-control" value="{{ $Book->book_pagesNumber }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/language.png" />
                            </div>
                            <input type="text" id="book_language" name="book_language" placeholder="book_language"
                                class="form-control" value="{{ $Book->book_language }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/child-safe-zone.png" />
                            </div>
                            <input type="text" id="book_age" name="book_age" placeholder="book_age" class="form-control"
                                value="{{ $Book->book_age }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/writer-male.png" />
                            </div>
                            <input type="text" id="book_author" name="book_author" placeholder="Book_author"
                                class="form-control" value="{{ $Book->book_author }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/picture.png" />
                            </div>
                            <input name="book_image" type="file" class="form-control" placeholder="Add Image"
                                value="images/{{ $Book->book_image }}" id="book_image">
                        </div>
                    </div>
                    {{-- added --}}
                    <div class="form-actions form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/pdf-2.png" />
                            </div>
                            <input name="upload_file" type="file" class="form-control" id="upload_file"
                                accept="application/pdf" value="uploads/{{ $Book->upload_file }}">
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

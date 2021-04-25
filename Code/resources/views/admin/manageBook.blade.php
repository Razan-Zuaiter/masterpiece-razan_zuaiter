@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Create Book</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="card-body card-block">
                <form action="manageBook" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/goodnotes.png" />
                            </div>
                            <input type="text" id="book_name" name="book_name" placeholder="book name" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="input-group-addon">
                       
                    </div> --}}
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
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/multi-edit.png" />
                            </div>
                            <textarea class="ckeditor form-control" name="book_description" class="form-control"></textarea>
                            {{-- <input type="text" id="book_description" name="book_description" placeholder="book description"
                                class="form-control"> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/price-tag.png" />
                            </div>
                            <input type="text" id="book_price" name="book_price" placeholder="book price"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/continuous-mode.png" />
                            </div>
                            <input type="text" id="book_pagesNumber" name="book_pagesNumber" placeholder="book pages number"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/language.png" />
                            </div>
                            <input type="text" id="book_language" name="book_language" placeholder="book language"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/child-safe-zone.png" />
                            </div>
                            <input type="text" id="book_age" name="book age" placeholder="book age" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/writer-male.png" />
                            </div>
                            <input type="text" id="book_author" name="book_author" placeholder="book author"
                                class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/picture.png" />
                            </div>
                            <input name="book_image" type="file" class="form-control" placeholder="Add Image">
                        </div>
                    </div>
                    {{-- added --}}
                    <div class="form-actions form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="https://img.icons8.com/bubbles/50/000000/pdf-2.png" />
                            </div>
                            <input name="upload_file" type="file" class="form-control" id="upload_file">

                        </div>
                    </div>
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
                <h3 class="title-5 m-b-35">book Table</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>book name</th>
                                <th>book description</th>
                                <th>book price</th>
                                <th>book pagesNumber</th>
                                <th>book language</th>
                                <th>book age</th>
                                <th>book Author</th>
                                <th>book image</th>
                                <th>book file</th>
                                <th>book edit</th>
                                <th>book delete</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="tr-shadow">
                                    <td>{{ $book['book_id'] }}</td>

                                    <td>{{ $book['book_name'] }}</td>
                                    <td>
                                        {!! $book['book_description'] !!}
                                    </td>
                                    <td>
                                        {{ $book['book_price'] }}
                                    </td>
                                    <td>
                                        {{ $book['book_pagesNumber'] }}
                                    </td>
                                    <td>
                                        {{ $book['book_language'] }}
                                    </td>
                                    <td>
                                        {{ $book['book_age'] }}
                                    </td>
                                    <td>
                                        {{ $book['book_author'] }}
                                    </td>
                                    <td>

                                        <img src="images/{{ $book->book_image }}" style="width: 5rem ; height:5rem">

                                    </td>
                                    <td>
                                        <iframe src="uploads/{{ $book->upload_file }}" width="60%" height="10%">
                                        </iframe>

                                    </td>
                                    <td>

                                        <a href="{{ route('manageBook.edit', $book->book_id) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <img src="https://img.icons8.com/bubbles/50/000000/edit-file.png" />
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('manageBook.destroy', $book->book_id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <img src="https://img.icons8.com/bubbles/75/000000/delete-forever.png" />
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

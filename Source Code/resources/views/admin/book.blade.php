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
                <form action="book" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="book_name" name="book_name" placeholder="book Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">

                        <select type="text" name="category_id" placeholder="Category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_id }}"> {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="book_description" name="book_description" placeholder="book description"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="book_pagesNumber" name="book_pagesNumber" placeholder="book_pagesNumber"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="book_language" name="book_language" placeholder="book_language"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="book_age" name="book_age" placeholder="book_age" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" id="book_author" name="book_author" placeholder="Book_author"
                                class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                            <input name="book_image" type="file" class="form-control" placeholder="Add Image">
                        </div>
                    </div>
                    {{-- added --}}
                    <div class="form-actions form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                            <input name="upload_file" type="file" class="form-control" id="upload_file">

                        </div>
                    </div>
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
                <h3 class="title-5 m-b-35">book Table</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>book name</th>
                                <th>book description</th>
                                <th>book Image</th>
                                <th>book Image</th>
                                <th>book Image</th>
                                <th>book Image</th>
                                <th>book Image</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="tr-shadow">
                                    <td>{{ $book['book_id'] }}</td>

                                    <td>{{ $book['book_name'] }}</td>
                                    <td>
                                        {{ $book['book_author'] }}
                                    </td>
                                    <td>
                                        {{ $book['book_description'] }}
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
                                        <div class="image img-cir img-40">
                                            <img src="images/{{ $book->book_image }}">
                                        </div>
                                    </td>
                                    <td>
                                        <iframe src="uploads/{{ $book->upload_file }}" width="100%" height="500px">
                                        </iframe>

                                    </td>


                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <a href="{{ route('manageBook.edit', $book->book_id) }}">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i> </button>
                                            </a>
                                        </div>
                                    <td>
                                        <form action="{{ route('book.destroy', $book->book_id) }}" method="post">
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

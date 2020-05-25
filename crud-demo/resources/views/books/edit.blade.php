@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a book</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br/>
            @endif
            <form method="post" action="{{ route('books.update', $book->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name-txt">Name:</label>
                    <input id="name-txt" type="text" class="form-control" name="name" value={{ $book->name }} />
                </div>
                <div class="form-group">
                    <label for="description-txt">Description:</label>
                    <input id="description-txt" type="text" class="form-control" name="description"
                           value={{ $book->description }} />
                </div>
                <div class="form-group">
                    <label for="author-txt">Author:</label>
                    <input id="author-txt" type="text" class="form-control" name="author" value={{ $book->author }} />
                </div>
                <div class="form-group">
                    <label for="isbn-txt">ISBN:</label>
                    <input id="isbn-txt" type="text" class="form-control" name="isbn" value={{ $book->isbn }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

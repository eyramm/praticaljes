@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">User <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.form') }}">Create Post</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('casestudy.form') }}">Create Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.case') }}">List Case Study</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user') }}">List User</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Create User</h1>
                <div class="col-md-4">
                    <form method="post" action="{{ route('user.form') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="id_title" name="title"
                                   aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="name">Image Article</label>
                            <input type="text" class="form-control" id="id_title" name="title"
                                   aria-describedby="imagePost">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="3" name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_title" name="author" value="{{ Auth::user()->author }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
@extends('Admin.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blog List
                        <a href="{{ route('blog.create') }}" class="btn btn-primary float-end">Add Blog</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Actions</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td><img src="{{asset('storage/' . $blog->images) }}" width="100px" alt="Blog Image"></td>
                                    <td>{{ Str::limit($blog->description, 50) }}</td>
                                    <td>{{ $blog->status }}</td>
                                    <td>{{ $blog->author }}</td>
                                    <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('Admin.index')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blog.stort') }}" method="POST" enctype="multipart/form-data">

        <div class="container mt-4">
            <div class="mb-3">
                <label for="title" class="form-label">Tieu de</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3 row">
                <div class="col-6">
                    <label for="status" class="form-label">status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="draft">active</option>
                        <option value="published">unactive</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Anh</label>
                <input type="file" class="form-control" id="images" name="images" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" src="#" alt="Anh demo" style="display:none; max-width:200px; margin-top:10px;" />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Noi dung</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Them</button>
            </div>
        </div>
    </form>

@endsection

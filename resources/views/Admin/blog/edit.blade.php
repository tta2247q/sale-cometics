@extends('Admin.index')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-light text-white">
                        <h4>Chỉnh sửa bài viết</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Tiêu đề</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $blog->title) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Ảnh</label>
                                @if ($blog->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image"
                                            style="max-width: 150px; display:block;" id="currentImage">
                                    </div>
                                @endif
                                <div class="mb-2">
                                    <img id="previewImage" src="#" alt="Preview"
                                        style="max-width: 150px; display: none;">
                                </div>

                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả</label>
                                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $blog->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Trạng thái</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Hiển thị</option>
                                    <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Ẩn</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Tác giả</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    value="{{ old('author', $blog->author) }}">
                            </div>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });
    </script>
@endsection

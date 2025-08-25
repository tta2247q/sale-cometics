@extends('Admin.index')

@section('title', 'Danh sách danh mục')

@section('content')
    <div class="container mt-4">
        <h2>Danh sách danh mục</h2>
        <a href="{{ route('Admin.categories.create') }}" class="btn btn-primary mb-3">+ Thêm danh mục</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->status }}</td>
                        <td>{{ $category->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('Admin.categories.edit', $category->id) }}"
                                class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('Admin.categories.destroy', $category->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Xóa danh mục này?')"
                                    class="btn btn-danger btn-sm">Xóa</button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Chưa có danh mục nào</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@extends('Admin.index')

@section('title', 'Dashboard / Users')

@section('content')
    <!-- Dashboard Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">320</p> {{-- chỗ này mày truyền $totalOrders từ controller xuống --}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">1500</p> {{-- chỗ này mày truyền $totalProducts từ controller xuống --}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Alerts</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Button thêm user -->
    <a href="{{ route('Admin.users.create') }}" type="button" class="btn btn-secondary btn-lg mb-3" style="width:120px">
        Add
    </a>

    <!-- Thông báo -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form lọc -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>User List</h5>
        </div>
        <div class="card-body">

            <form method="GET" action="{{ route('Admin.users.index') }}" class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control"
                           placeholder="Tìm theo tên hoặc email"
                           value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <select name="role" class="form-select">
                        <option value="">-- Tất cả quyền --</option>
                        <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Lọc</button>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('Admin.users.index') }}" class="btn btn-secondary w-100">Reset</a>
                </div>
            </form>

            <!-- Bảng user -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name user</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Phone number</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>{{ $user->number_phone }}</td>
                            <td>
                                <a href="{{ route('Admin.users.show', $user->id) }}" class="btn btn-sm btn-info text-white">
                                    Chi tiết
                                </a>
                                <a href="{{ route('Admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                    Sửa
                                </a>
                                <form action="{{ route('Admin.users.destroy', $user->id) }}" method="POST"
                                      style="display:inline-block;"
                                      onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Không có người dùng nào</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Phân trang -->
            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <footer class="text-center py-3 mt-4 bg-light border-top">
        <small class="text-muted">&copy; 2025 Admin Dashboard. All rights reserved.</small>
    </footer>
@endsection

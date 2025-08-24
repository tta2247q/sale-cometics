@extends('Admin.index')

@section('title', 'Dashboard/users')

@section('content')
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">1500</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">320</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Product</h5>
                    <p class="card-text">{{ $totalUsers }}</p>
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

    <a href="{{ route('Admin.users.create') }}" type="button" class="btn btn-secondary btn-lg mb-3"
        style="width:100px">Add</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <h5>User List</h5>
        </div>
        <div class="card-body">
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
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->number_phone }}</td>
                            <td>{{ $user->quantity }}</td>
                            <td>
                                <a href="{{ route('Admin.users.show', $user->id) }}"
                                    class="btn btn-sm btn-info text-white">Chi
                                    tiết</a>
                                <a href="{{ route('Admin.users.edit', $user->id) }}"
                                    class="btn btn-sm btn-warning">Sửa</a>
                                <form action="{{ route('Admin.users.destroy', $user->id) }}" method="POST"
                                    style="display:inline-block;" onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center py-3 mt-4 bg-light border-top">
        <small class="text-muted">&copy; 2025 Admin Dashboard. All rights reserved.</small>
    </footer>
@endsection

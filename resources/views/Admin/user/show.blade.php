@extends('Admin.index')
@section('title', 'Chi tiết người dùng')
@section('content')
    <div class="mx-4 ">
        <div class="row mb-4">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Admin.users.index') }}">Quản lý người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin chi tiết</li>
                    </ol>
                </nav>
                <h2 class="mb-0 text-center fw-bold">Thông Tin Người Dùng</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card shadow-lg border-0 user-card">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="avatar-container">
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                                        class="rounded-circle shadow" width="100" height="100" style="object-fit: cover;">
                                @else
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0D8ABC&color=fff&size=100"
                                        alt="Avatar" class="rounded-circle shadow" width="100" height="100" style="object-fit: cover;">
                                @endif
                                <span
                                    class="status-badge {{ $user->is_online ? 'status-online' : 'status-offline' }}"></span>
                            </div>
                            <h3 class="mt-3 mb-1">{{ $user->name }}</h3>
                            <span class="badge bg-primary text-uppercase">{{ $user->role ?? 'user' }}</span>
                        </div>

                        <div class="row mt-4">
                            {{-- Thông tin cơ bản --}}
                            <div class="col-md-6">
                                <h5 class="mb-3"><i class="bi bi-info-circle"></i> Thông tin cơ bản</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-envelope me-2"></i>
                                        <strong>Email:</strong> {{ $user->email }}
                                    </li>
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-telephone me-2"></i>
                                        <strong>Số điện thoại:</strong> {{ $user->number_phone ?? 'Chưa cập nhật' }}
                                    </li>
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-geo-alt me-2"></i>
                                        <strong>Địa chỉ:</strong> {{ $user->address ?? 'Chưa cập nhật' }}
                                    </li>
                                </ul>
                            </div>

                            {{-- Thông tin hệ thống --}}
                            <div class="col-md-6">
                                <h5 class="mb-3"><i class="bi bi-clock-history"></i> Thông tin hệ thống</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-calendar-plus me-2"></i>
                                        <strong>Ngày tạo:</strong> {{ $user->created_at->format('d/m/Y H:i') }}
                                    </li>
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-clock-history me-2"></i>
                                        <strong>Cập nhật lần cuối:</strong> {{ $user->updated_at->format('d/m/Y H:i') }}
                                    </li>
                                    <li class="list-group-item user-info-item">
                                        <i class="bi bi-shield-check me-2"></i>
                                        <strong>Trạng thái:</strong>
                                        @if ($user->is_active)
                                            <span class="badge bg-success">Đang hoạt động</span>
                                        @else
                                            <span class="badge bg-secondary">Ngừng hoạt động</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @if (isset($activities) && count($activities))
                            <div class="row mt-4">
                                <div class="col-12">
                                    <h5 class="mb-3"><i class="bi bi-activity"></i> Hoạt động gần đây</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Thời gian</th>
                                                    <th>Hoạt động</th>
                                                    <th>Địa chỉ IP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activities as $activity)
                                                    <tr>
                                                        <td>{{ $activity->created_at->format('d/m/Y H:i') }}</td>
                                                        <td>{{ $activity->description }}</td>
                                                        <td>{{ $activity->ip_address }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class=" mt-4">
                            <div>
                                <a href="{{ route('Admin.users.edit', $user->id) }}" class="btn btn-warning action-btn">
                                    <i class="bi bi-pencil-square"></i> Chỉnh sửa
                                </a>
                                <form action="{{ route('Admin.users.destroy', $user->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger action-btn ms-2"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">
                                        <i class="bi bi-trash"></i> Xóa
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>



    </style>
@endsection

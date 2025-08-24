@extends('Admin.index')
@section('content')
    <a href="javascript:history.back()" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
    <h2>Cập nhật người dùng</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Cột 1 -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên người dùng</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Địa chỉ Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="number_phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="number_phone" name="number_phone"
                           value="{{ old('number_phone', $user->number_phone) }}" required>
                </div>
            </div>

            <!-- Cột 2 -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="avatar" class="form-label">Ảnh người dùng</label>
                    <input type="file" class="form-control" id="avatar" name="avatar"
                           accept="image/*" onchange="previewImage(event)">
                    <div class="mt-2">
                        @if ($user->avatar)
                            <img id="preview" src="{{ asset('storage/' . $user->avatar) }}" style="max-width:150px">
                        @else
                            <img id="preview" src="#" style="max-width:150px; display:none;">
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address"
                           value="{{ old('address', $user->address) }}" required>
                </div>
                                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu mới (bỏ trống nếu không đổi)</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Phân quyền</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

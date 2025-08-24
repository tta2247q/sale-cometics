<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
{
    $query = User::query();

    // Tìm kiếm theo tên hoặc email
    if ($request->has('search') && !empty($request->search)) {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('name', 'like', "%$search%")
              ->orWhere('email', 'like', "%$search%");
        });
    }

    // Lọc theo role (nếu có)
    if ($request->has('role') && !empty($request->role)) {
        $query->where('role', $request->role);
    }

    // Lấy danh sách + phân trang
    $users = $query->paginate(10)->withQueryString();
    $totalUsers = $query->count();

    return view('Admin.user.index', compact('users', 'totalUsers'));
}

    public function create()
    {
        return view('Admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'number_phone' => 'required|numeric',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'role' => 'required|in:admin,user',
        ]);
        $data = $request->only(['name', 'email', 'number_phone', 'address', 'role']);
        $data['password'] = bcrypt($request->password);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->store('users', 'public');
            $data['avatar'] = $path;
        }
        User::create($data);
        return redirect()->route('Admin.users.index')->with('success', 'Thêm người dùng thành công');
    }

    public function show(string $id)
    {
        return view('Admin.user.show', ['user' => User::findOrFail($id)]);
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles = ['admin' => 'Admin', 'user' => 'User'];
        return view('Admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:8',
            'number_phone' => 'required|numeric',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'role' => 'required|in:admin,user',
        ]);
        $data = $request->only(['name', 'email', 'number_phone', 'address', 'role']);
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->store('users', 'public');
            $data['avatar'] = $path;
        }
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('Admin.users.index')->with('success', 'Cập nhật người dùng thành công');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('Admin.users.index')->with('success', 'Xóa người dùng thành công');
    }
}

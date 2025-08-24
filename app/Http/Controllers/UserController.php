<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $totalUsers = User::count();
        return view('Admin.user.index', compact('users', 'totalUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'number_phone'=>'required|numeric',
            'address'=>'required',
            'avatar'=>'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $data = $request->only(['name', 'email', 'number_phone', 'address', 'avatar', 'password']);
        if($request->hasFile('avatar')){
            $file = $request->file('image');
            $path = $file->store('users', 'public');
            $data['avatar'] = $path;
        }
        User::create($data);
        return redirect()->route('Admin.users.index')->with('success', 'Thêm người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Admin.user.show', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('Admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'number_phone'=>'required|numeric',
            'address'=>'required',
            'avatar'=>'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $data = $request->all();
        if($request->hasFile('avatar')){
            $file = $request->file('image');
            $path = $file->store('users', 'public');
            $data['avatar'] = $path;
        }
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('Admin.users.index')->with('success', 'Cập nhật người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('Admin.users.index')->with('success', 'Xóa người dùng thành công');
    }
}

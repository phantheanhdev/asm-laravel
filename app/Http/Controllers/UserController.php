<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        return view('admin.user.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $full_name = $request->input('full_name');
        $acc_name = $request->input('acc_name');
        $pass = $request->input('pass');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $role = $request->input('role');

        $data = [
            'full_name' => $full_name,
            'acc_name' => $acc_name,
            'pass' => $pass,
            'view' => 0,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'role' => $role
        ];
        User::create($data);
        return redirect()->route('user.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $full_name = $request->input('full_name');
        $acc_name = $request->input('acc_name');
        $pass = $request->input('pass');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $role = $request->input('role');

        $user->fill([
            'full_name' => $full_name,
            'acc_name' => $acc_name,
            'pass' => $pass,
            'view' => 0,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'role' => $role
        ])->save();

        return redirect()->route('user.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Xóa thành công');
    }


}

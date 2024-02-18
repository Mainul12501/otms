<?php

namespace App\Http\Controllers\Admin\UserModule;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user, $users = [];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->users   = User::latest()->get();

        return view('admin.user-management.user.index', [
            'users'  => $this->users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user-management.user.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::createOrUpdateUser($request);
        return back()->with('success', 'User Created Successfully.');
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
    public function edit(string $id)
    {
        return view('admin.user-management.user.form', [
            'user'  => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::createOrUpdateUser($request, $id);
        return redirect()->route('users.index')->with('success', 'User Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::deleteUser($id);
        return back()->with('success', 'User deleted Successfully.');
    }
}

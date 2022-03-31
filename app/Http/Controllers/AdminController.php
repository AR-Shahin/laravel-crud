<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::latest()->get();
        return view('Backend.admin.index', compact('admins'));
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
        return back();
    }

    public function view(Admin $admin)
    {
        return view('Backend.admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {

        $admin->update($request->all());
        return redirect()->route('admin.index');
    }
}

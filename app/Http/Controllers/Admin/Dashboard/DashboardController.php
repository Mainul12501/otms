<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role == 0)
        {
            return redirect('/student/dashboard')->with('success', 'You logged in successfully.');
        }
        return view('admin.dashboard.dashboard');
    }
}

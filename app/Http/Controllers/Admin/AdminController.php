<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * return dashboard view
     */
    public function dashboard(Request $request): View
    {
        return view('admin.dashboard.index');
    }
}

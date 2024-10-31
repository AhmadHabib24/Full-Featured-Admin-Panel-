<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function analyticsview()
    {
        return view('admin.analytics');
    }
    public function project_index()
    {
        return view('admin.project');
    }
    public function crm_index()
    {
        return view('admin.crm');
    }
}

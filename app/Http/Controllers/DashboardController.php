<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function analyticsview()
    {
        return view('admin.Dashboards.analytics');
    }
    public function project_index()
    {
        return view('admin.Dashboards.project');
    }
    public function crm_index()
    {
        return view('admin.Dashboards.crm');
    }
    public function wallet_index()
    {
        return view('admin.Dashboards.wallet-dashoard');
    }
}

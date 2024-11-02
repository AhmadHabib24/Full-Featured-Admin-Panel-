<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    public function index()
    {
        return view('admin.Apps.Calendar.index');
    }
}

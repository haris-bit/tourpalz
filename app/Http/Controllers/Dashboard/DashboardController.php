<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stat;

class DashboardController extends Controller
{
    public function index() 
    {
        $stats =  Stat::all();

        return view('dashboard.pages.dashboard',compact('stats'));
    }
}

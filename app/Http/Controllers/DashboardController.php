<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function view(): View
    {
        return view('Dashboard.dashboard');
    }
}

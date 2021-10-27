<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    //ecommerce
    public function dashboardEcommerce(){
        return view('pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics(){
        return view('pages.dashboard-analytics');
    }
}

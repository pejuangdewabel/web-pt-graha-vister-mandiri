<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard');
    }
}

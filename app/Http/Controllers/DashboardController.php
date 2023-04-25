<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use App\Models\Galeries;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $galeries = Galeries::all()->count();
        $events = Evenements::all()->count();
        $users = User::all()->count();
        return view('dashboard.index', compact('galeries','events','users'));
    }
}

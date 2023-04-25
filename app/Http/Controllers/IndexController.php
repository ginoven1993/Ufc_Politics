<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use App\Models\Galeries;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $galeries = Galeries::all();
        $events = Evenements::all();
        return view('home', compact('galeries','events'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    return view('dashboards.user.index');
}

public function admin(){
    return view('dashboards.admin.index');
}
}

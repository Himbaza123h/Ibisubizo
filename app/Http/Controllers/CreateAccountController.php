<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    public function index($id){
        return view('register.index');
    }
}

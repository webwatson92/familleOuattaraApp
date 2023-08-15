<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function liste(){
        return view('back.liste-user');
    }

    public function create(){
        return view('back.creer-membre');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function stamp()
    {
        return view('stamp');
    }

    public function attendance()
    {
        return view('attendance');
    }
}
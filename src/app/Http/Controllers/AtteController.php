<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AtteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showStamp()
    {
        return view('stamp');
    }

    public function attendance()
    {
        // $authors = User::simplePaginate(5);
        // return view('attendance', ['authors' => $authors]);
        return view('attendance');
    }
}
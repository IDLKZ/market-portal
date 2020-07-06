<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('landlord.dashboard');
    }

    public function companies(){
        return view("landlord.companies.index");
    }

    public function categories()
    {
        return view('landlord.categories.index');
    }
}

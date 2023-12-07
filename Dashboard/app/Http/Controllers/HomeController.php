<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import other models as needed

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}

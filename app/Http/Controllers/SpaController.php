<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SpaController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return Inertia::render('Dashboard/ListUsers',
            [
                'users' => $users
            ]
        );
    }
}

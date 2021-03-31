<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CanalController extends Controller
{
    public function index($slug)
    {
        if($slug != 'tv-anisio-teixeira'){
            return abort(404);
        }

        return Inertia::render('Canal', [
            'slug' => $slug
        ]);
    }
}

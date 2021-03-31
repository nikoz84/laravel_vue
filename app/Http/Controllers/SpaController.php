<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
class SpaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showIndex()
    {
        return Inertia::render('Home', [
            'data' => [
                'id' => 35,
                'name' => 'Nico'
            ],
        ]);
    }
    public function showSobre()
    {

        return Inertia::render('Sobre', [
            'data' => [
                'id' => 55,
                'name' => 'Pri'
            ],
        ]);
    }
    public function showGaleria()
    {

        return Inertia::render('Galeria', [
            'data' => [
                'id' => 55,
                'name' => 'Pri'
            ],
        ]);
    }


}

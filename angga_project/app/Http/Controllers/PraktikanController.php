<?php

namespace App\Http\Controllers;

use App\Models\Praktikan;

class PraktikanController extends Controller
{
    public function index()
    {
        $praktikans = Praktikan::all();
        return view('praktikan.index', compact('praktikans'));
    }
}

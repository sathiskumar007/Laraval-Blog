<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CauroselsController extends Controller
{
    public function index()
    {
        $caurosel = \App\Models\caurosel::all();
        return view('caurosel', compact('caurosel'));
    }
}

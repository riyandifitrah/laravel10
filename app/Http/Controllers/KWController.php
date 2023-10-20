<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KWController extends Controller
{
    public function index()
    {
        return view("kw.create_pf");
    }
}

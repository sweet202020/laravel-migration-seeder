<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function trains()
    {
        $trains = Train::all();
        return view('trains', compact('trains'));
    }
}

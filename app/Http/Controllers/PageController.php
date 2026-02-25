<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains = Train::orderBy('landing_time', 'asc')->get();

        return view('welcome', compact('trains'));
    }

    public function about()
    {
        return view('about');
    }
}

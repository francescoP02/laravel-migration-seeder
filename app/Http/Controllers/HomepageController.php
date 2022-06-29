<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {

        $trains = Train::all();

        return view('homepage', compact('trains'));

    }
}

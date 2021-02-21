<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    function list()
    {
    	return Restaurant::all();
    	return view('list');
    }
}

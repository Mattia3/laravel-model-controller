<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
 function index(){
    $movie = movie::all();
    return view('Home.index', compact('movie'));
  }
}

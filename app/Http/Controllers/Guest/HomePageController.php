<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $title = 'Home';

        // query database Movies
        $arrayMovies = Movie::all();

        return view('pages.home', compact('title','arrayMovies'));
    }
}

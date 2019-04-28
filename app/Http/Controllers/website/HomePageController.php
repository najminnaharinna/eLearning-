<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class HomePageController extends Controller
{
    public function index()
    {
        return view('website/home');
    }
}

<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $this->data['courses'] = Course::all();
        return view('website.courses',$this->data);
    }

    public function show($id)
    {
        $this->data['course'] = Course::find($id);

        return view('website.details',$this->data);
    }
    
}

<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class LessonsController extends Controller
{
    public function show($id, $slug)
    {
        $this->data['lesson'] = Lesson::find($id);

        return view('website.lessons',$this->data);
    }
}

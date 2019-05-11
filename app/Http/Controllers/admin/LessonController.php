<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class LessonController extends Controller
{
    public function index()
    {
        $this->data['lessons']= Lesson::all();
        return view('admin.lesson.lessons',$this->data);
    }

    public function destroy($id)
    {
        Lesson::find($id)->delete();
        flash('Lesson Deleted Successfully')->success();

        return redirect()->to('admin/lessons');
    }
}

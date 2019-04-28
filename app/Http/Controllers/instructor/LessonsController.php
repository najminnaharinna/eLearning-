<?php

namespace App\Http\Controllers\instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Section;
use App\Course;
use App\Lesson;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['lessons'] = Auth::user()->lessons;
        
        return view('instructor.lessons.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['courses'] = Course::list();
        $this->data['sections'] = Section::list();
        return view('instructor.lessons.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $FormData = $request->all();
        $FormData['instructor_id'] = Auth::id();


        Lesson::create($FormData);

        flash('Lesson Create Successfully')->success();
        return redirect()->to('users/lessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['lesson'] = Auth::user()->lessons()->findOrFail($id);

        return view('instructor.lessons.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['courses'] = Course::list();
        $this->data['sections'] = Section::list();
        $this->data['lesson'] = Auth::user()->lessons()->findOrFail($id);
        return view('instructor.lessons.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $createdata = $request->all();
        Lesson::find($id)->update($createdata);
        flash('Section Updated Successfully')->success();

        return redirect()->to('users/lessons');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)                                                                                                                                      
    {
        Lesson::find($id)->delete();

        flash('Section Deleted Successfully')->success();
        return redirect()->to('users/lessons');

    }
}

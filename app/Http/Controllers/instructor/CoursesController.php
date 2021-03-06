<?php

namespace App\Http\Controllers\instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Category;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['courses'] = Auth::user()->courses;
        return view('instructor.courses.courses',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['title'] = 'Create New Course';
        $this->data['categories'] = Category::list();
        return view('instructor.courses.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $FormData = $request->only(['category_id','title','description','image']);
        $FormData['instructor_id'] = Auth::id();

        $file = $request->file('image');
        $filename = rand(00, 999999).$file->getClientOriginalName();
        $file->move('uploads', $filename );
        $FormData['image'] = 'uploads/'.$filename;

        Course::create($FormData);

        flash('Course Create Successfully')->success();
        return redirect()->to('users/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['course'] = Auth::user()->courses()->findOrFail($id);

        return view('instructor.courses.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['title'] = 'Update Course';
        $this->data['categories'] = Category::list();
        $this->data['course'] = Auth::user()->courses()->findOrFail($id);
        return view('instructor.courses.edit',$this->data);
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
        $formData = $request->only(['category_id', 'title', 'description']); 
        $course = Course::find($id);
        // $course = Auth::user()->courses()->findOrFail($id);

        if( $request->hasFile('image') ) {
            unlink($course->image);
            $file = $request->file('image');
            $filename = rand(00, 999999).$file->getClientOriginalName();
            $file->move('uploads', $filename);
            $formData['image'] = 'uploads/' . $filename;
        }

        $course->update($formData);
        flash('Course Updated Successfully')->success();

        return redirect()->to('users/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        // $course = Auth::user()->courses()->findOrFail($id);
        unlink($course->image);
        $course->delete();
        flash('Course Deleted Successfully')->success();

        return redirect()->to('users/courses');

    }
}

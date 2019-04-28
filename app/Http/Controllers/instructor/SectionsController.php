<?php

namespace App\Http\Controllers\instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Section;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['sections'] = Auth::user()->sections;
        
        return view('instructor.sections.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['title'] = 'Create New Sections';
        $this->data['courses'] = Course::list();
        return view('instructor.sections.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createdata = $request->all();
        $createdata['instructor_id'] = Auth::id();
        Section::create($createdata);
        flash('Section Create Successfully')->success();

        return redirect()->to('users/sections');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['title'] = 'Create New Sections';
        $this->data['courses'] = Course::list();
        $this->data['section'] = Section::find($id);

        flash('Section Edit Successfully')->success();
        return view('instructor.sections.edit',$this->data);
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
        Section::find($id)->update($createdata);
        flash('Section Updated Successfully')->success();

        return redirect()->to('users/sections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::find($id)->delete();

        flash('Section Deleted Successfully')->success();
        return redirect()->to('users/sections');
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;

class SectionController extends Controller
{
    public function index()
    {
        $this->data['sections']= Section::all();
        return view('admin.section.sections',$this->data);
    }

    public function destroy($id)
    {
        Section::find($id)->delete();
        flash('Section Deleted Successfully')->success();

        return redirect()->to('admin/sections');
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
       
        $this->data['users'] = User::orderBy('id','desc')->get();
        return view('admin.users.user',$this->data);
    }


    public Function show($id)
    {
        $this->data['user'] = User::find($id);        
        return view('admin.users.show',$this->data);
    }

    public function approve($id)
    {
        $user = User::find($id);
        $user->is_approved = 1;
        $user->save();

        flash('Approve Successfully')->success();

        return redirect()->to('admin/users');
    }

    public Function delete($id)
    {
        User::find($id)->delete();
        flash('Category Deleted Successfully')->success();

        return redirect()->to('admin/users'); 
    }
}

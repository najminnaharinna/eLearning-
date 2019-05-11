<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.password', $this->data);
    }

    public function update(Request $request)
    {
        $inputdata = $request->all();
        $user = Auth::user();

        if( Hash::check( $inputdata['old_password'], $user->password) ){
            $user->password = Hash::make( $inputdata['new_password'] );
            $user->save();

            flash('Password Change Successfully')->success();
            return redirect()->back();

        }else{
            
            flash('Worng Old Password ')->Warning();
            return redirect()->back();
        }

    }
}

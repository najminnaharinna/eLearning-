<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	$profile = $user->profile()->firstOrCreate( [ 'user_id' => $user->id] );

        $this->data['user'] = $user;
        $this->data['user']->dob = $user->profile->dob;
        $this->data['user']->phone = $user->profile->phone;
        $this->data['user']->address = $user->profile->address;
        $this->data['user']->institute = $user->profile->institute;
        $this->data['user']->subject = $user->profile->subject;

        return view('admin.profile', $this->data);
    }

    public function profileupdate(Request $request, $id)
    {

        $formData = $request->only(['name','email']); 
        $user = Auth::user()->update($formData);

        $inputData = $request->only(['dob','phone','address','institute','subject']);
        $userprofile = Auth::user()->profile()->update($inputData);

        flash('UserProfile Updated Successfully')->success();

        return redirect()->to('admin/profile');
    }
}

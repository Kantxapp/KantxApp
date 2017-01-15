<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\User;

class ProfilesController extends Controller
{
    
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('profiles.profile')
            ->with('user', $user);
    }
    public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user()->profile);
    }
    public function update(Request $r)
    {
        $this->validate($r, [
            'name' => 'required|max:25',
            'surname1' => 'required|max:50',
            'surname2' => 'required|max:50',
            'phone' => 'size:9',
            'province' => 'required|max:50',
            'city' => 'required|max:50',
            'about' => 'max:250',
        ]);
        Auth::user()->profile()->update([
            'name' => $r->name,
            'surname1' => $r->surname1,
            'surname2' => $r->surname2,
            'phone' => $r->phone,
            'province'=> $r->province,
            'city' => $r->city,
            'about' => $r->about,
        ]);
        if($r->hasFile('avatar'))
        {
            Auth::user()->update([
                'avatar' => $r->avatar->store('public/avatars')
            ]);
        }
        Session::flash('success', 'Perfil actualizado.');
        return redirect()->back();
    }
}

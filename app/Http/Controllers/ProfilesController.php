<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;
use Storage;
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
        // dd($r->avatar);
            Auth::user()->update([
                'avatar' => $r->avatar->store('/public/avatars')
            ]);
            $arrayAvatar = explode("/", Auth::user()->avatar);
            $arrayAvatar[0] = 'storage';
            $arrayAvatarCorrect = '/' . $arrayAvatar[0] . '/' . $arrayAvatar[1] . '/' . $arrayAvatar[2];
            Auth::user()->update([
                'avatar' => $arrayAvatarCorrect
            ]);
        // Storage::put(
        //     'avatars/'.Auth::user()->id,
        //     file_get_contents($r->file('avatar')->getRealPath())
        // );
        
        // $pathToFile = 'public/avatars/'.  Auth::user()->id;
        
        // // resize image
        // Image::make($r->file('avatar')->getRealPath())
        //   ->resize(300, 300)
        //   ->save($pathToFile);
        
        // // save image to database
        // Auth::user()->avatar = $pathToFile;
        // Auth::user()->save();
        }
        Session::flash('success', 'Perfil actualizado.');
        
        // return redirect()->back();
        return redirect()->action(
            'ProfilesController@index',['slug' => Auth::user()->slug]
        );
    }
}

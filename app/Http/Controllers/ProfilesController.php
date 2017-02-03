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
        $province = '';
        $this->validate($r, [
            'name' => 'required|max:25',
            'surname1' => 'required|max:50',
            'surname2' => 'required|max:50',
            'phone' => 'size:9',
            'province' => 'required|max:50',
            'city' => 'required|max:50',
            'about' => 'max:250',
        ]);
            $compare = (int)$r->province;
            

        
            switch ($r->province) {
                case 1:
                    $province = 'Álava';
                    break;
                case 2:
                    $province = 'Albacete';
                    break;
                case 3:
                    $province = 'Alicante';
                    break;                    
                case 4:
                    $province = 'Almería';
                    break;
                case 33:
                    $province = 'Asturias';
                    break;            
                case 5:
                    $province = 'Ávila';
                    break;   
                case 6:
                    $province = 'Badajoz';
                    break;  
                case 8:
                    $province = 'Barcelona';
                    break;    
                case 9:
                    $province = 'Burgos';
                    break;  
                case 10:
                    $province = 'Cáceres';
                    break;  
                case 11:
                    $province = 'Cádiz';
                    break;     
                case 39:
                    $province = 'Cantabria';
                    break;          
                case 12:
                    $province = 'Castellón';
                    break;     
                case 51:
                    $province = 'Ceuta';
                    break;  
                case 13:
                    $province = 'Ciudad Real';
                    break;
                case 14:
                    $province = 'Córdoba';
                    break; 
                case 15:
                    $province = 'La Coruña';
                    break;      
                case 16:
                    $province = 'Cuenca';
                    break; 
                case 17:
                    $province = 'Gerona';
                    break;
                case 18:
                    $province = 'Granada';
                    break;  
                case 19:
                    $province = 'Guadalajara';
                    break;    
                case 20:
                    $province = 'Guipúzcoa';
                    break;
                case 21:
                    $province = 'Huelva';
                    break;
                case 22:
                    $province = 'Huesca';
                    break;
                case 7:
                    $province = 'Baleares';
                    break;
                case 23:
                    $province = 'Jaén';
                    break;
                case 24:
                    $province = 'León';
                    break;
                case 25:
                    $province = 'Lérida';
                    break;
                case 27:
                    $province = 'Lugo';
                    break;
                case 28:
                    $province = 'Comunidad de Madrid';
                    break;
                case 29:
                    $province = 'Málaga';
                    break;
                case 52:
                    $province = 'Melilla';
                    break;
                case 30:
                    $province = 'Región de Murcia';
                    break;
                case 31:
                    $province = 'Navarra';
                    break;
                case 32:
                    $province = 'Orense';
                    break;
                case 34:
                    $province = 'Palencia';
                    break;
                case 35:
                    $province = 'Las Palmas';
                    break;
                case 36:
                    $province = 'Pontevedra';
                    break;
                case 26:
                    $province = 'La Rioja';
                    break;
                case 37:
                    $province = 'Salamanca';
                    break;
                case 38:
                    $province = 'Santa Cruz de Tenerife';
                    break;
                case 40:
                    $province = 'Segovia';
                    break;
                case 41:
                    $province = 'Sevilla';
                    break;
                case 42:
                    $province = 'Soria';
                    break;
                case 43:
                    $province = 'Tarragona';
                    break;
                case 44:
                    $province = 'Teruel';
                    break;
                case 45:
                    $province = 'Toledo';
                    break;
                case 46:
                    $province = 'Valencia';
                    break;
                case 47:
                    $province = 'Valladolid';
                    break;
                case 48:
                    $province = 'Vizcaya';
                    break;
                case 49:
                    $province = 'Zamora';
                    break;
                case 50:
                    $province = 'Zaragoza';
                    break;
            }

        Auth::user()->profile()->update([
            'name' => $r->name,
            'surname1' => $r->surname1,
            'surname2' => $r->surname2,
            'phone' => $r->phone,
            'province'=> $province,
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

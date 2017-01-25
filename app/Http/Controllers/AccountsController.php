<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        return view('accounts.show', [
            
                'user' => auth()->user()
            
            ]);
    }
    public function edit()
    {
        return view('accounts.edit', [
            
                'user' => auth()->user()
            
            ]);
    }
    
    public function update()
    {
        $this->validate(request(), [
            'name' => 'required|max:50',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
                ->ignore(auth()->id())
                ->where(function($query){
                    $query->where('activated', 1);
                })
                
                ],
            'password' => 'required|min:6|confirmed',
            
        ]);
        
        auth()->user()->update([
            
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'activated' => true,
            
            ]);
        
        return view('accounts.show', [
            
                'user' => auth()->user()
            
            ]);
    }
}

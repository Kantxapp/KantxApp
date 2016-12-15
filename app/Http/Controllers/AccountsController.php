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
                
                ]
            
        ]);
        
        auth()->user()->update([
            
            'name' => request('name'),
            'email' => request('email')
            
            ]);
        
        return back();
    }
}

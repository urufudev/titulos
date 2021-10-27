<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Office;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
        return view('auth.register',compact('offices'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        

        Auth::login($user = User::create([
            'name' => $request->name,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'dni' => $request->dni,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]));

        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->photo = 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.$user->name.'+'.$user->ap_paterno;
        $profile->save();

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}

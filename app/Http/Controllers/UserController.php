<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Profile;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use Jenssegers\Date\Date;

class UserController extends Controller
{
  public function __construct()
  {
      $this->authorizeResource(User::class, 'user');
  }

  
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Usuarios"]
        ];
        
    
        return view('users.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Crear"]
        ];

        
        $roles = Role::get();
        return view('users.create',compact('roles','pageConfigs','breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $user=new User;

        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        
        $user->email  =  $request['email'];
        $user->password  =  bcrypt($request['password']);
        
        $user->save();
       
        
        //actualize los roles
        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.index')
            ->with('success','Registrado con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Perfil"]
        ];

                
        /* $users = User::where('office_id', $office->id)
            ->where('status', 'ACTIVO')
            ->join('profiles as pro', 'users.id', '=', 'pro.user_id')
            ->select('users.id','users.name','users.ap_paterno' ,'users.ap_paterno' ,'users.dni' ,'users.status', 'pro.photo','pro.position_id')
            ->get(); */

        $users = User::where('status', 'ACTIVO')
        ->get();

        /* dd($user->profile->birthday); */

        return view('users.show', compact('user','pageConfigs','breadcrumbs','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Editar"]
        ];

    
        $roles = Role::get();

        return view('users.edit',compact('user','roles','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        $user->email  =  $request['email'];
        
        
        if($request['password']!=null)
        {
            $user->password  =  bcrypt($request['password']);
        }
        $user->save();
        
        
        
        //actualize los roles
        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('users.index')
            ->with('success','Actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}

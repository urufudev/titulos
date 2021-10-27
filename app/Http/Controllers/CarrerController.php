<?php

namespace App\Http\Controllers;

use App\Models\Carrer;
use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Requests\Carrer\StoreRequest;
use App\Http\Requests\Carrer\UpdateRequest;

class CarrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Carrer::class, 'carrer');
    }

    public function index()
    {
/*         $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Carreras"]
        ];
        return view('carrers.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Institute $institute)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/institutes/".$institute->id,"name" => "Carreras de ".$institute->name],
            ["name" => "Crear"]
        ];

        $carrer = new Carrer();
        
        return view('carrers.create',compact('carrer','institute','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Institute $institute)
    {
        
        $institute->carrers()->create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));


        return redirect()->route('institutes.show',$institute)->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrer  $carrer
     * @return \Illuminate\Http\Response
     */
    public function show(Carrer $carrer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrer  $carrer
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute, Carrer $carrer)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/institutes/".$institute->id,"name" => "Carreras de ".$institute->name],
            ["name" => "Editar"]
        ];


        return view('carrers.edit',compact('carrer','institute','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrer  $carrer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request,  Institute $institute,Carrer $carrer)
    {

        $carrer->update(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));


        return redirect()->route('institutes.show',$institute)
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrer  $carrer
     * @return \Illuminate\Http\Response
     */
    public function destroy( Institute $institute ,Carrer $carrer)
    {
        
        if ($carrer->status == 'ACTIVO') {
            $carrer->update(['status' => 'INACTIVO']);

            return redirect()->route('institutes.show',$institute)
            ->with('warning', 'Se cambio a activo correctamente.');
            
            /* return back()->with('info', 'SE CAMBIO A INACTIVO CORRECTAMENTE '); */
        }
        else {
            $carrer->update(['status' => 'ACTIVO']);
            return redirect()->route('institutes.show',$institute)
            ->with('warning', 'Se cambio a activo correctamente.');
            /* return back()->with('warning', 'SE CAMBIO A ACTIVO CORRECTAMENTE '); */
        } 
    }

    public function carrerdep(Request $request){
        $institute_id = $request->institute_id;

        $carrers = Institute::where('id',$institute_id)
        ->with('carrers')
        ->get();
        
       

        return response()->json(['carrers' => $carrers]);
        
    }
}

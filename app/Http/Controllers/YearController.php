<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use App\Http\Requests\Year\StoreRequest;
use App\Http\Requests\Year\UpdateRequest;
class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Year::class, 'year');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Años"]
        ];
        return view('years.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
            ["link"=> "/years","name" => "Años"],
            ["name" => "Crear"]
        ];

        $year = new Year();
        
        return view('years.create',compact('year','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $year = Year::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        return redirect()->route('years.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/years","name" => "Años"],
            ["name" => "Editar"]
        ];

        return view('years.edit',compact('year','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Year $year)
    {
        $year->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('years.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        //
    }
}

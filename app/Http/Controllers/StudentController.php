<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Institute;
use Barryvdh\DomPDF\Facade as PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Student::class, 'student');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"], ["name" => "Estudiantes"]
        ];
        return view('students.index', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
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
            ["link" => "/students", "name" => "Estudiantes"],
            ["name" => "Crear"]
        ];

        /* $institutes=Institute::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id','type'); */
        /* ->get(); */

        /* dd($institutes->carrers->first()); */
        $student = new Student();

        return view('students.create', compact('student',/* 'institutes', */ 'breadcrumbs', 'pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        /* dd($request); */
        $student = Student::create($request->all());
        /* $student = Student::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ])); */

        return redirect()->route('students.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link" => "/users", "name" => "Usuarios"],
            ["name" => "Ver"]
        ];

        $students = Student::where('document_number', $student->document_number)
            ->get()
            ->groupBy('full_name')->toBase();

        /* dd($students); */


        return view('students.show', compact('students', 'pageConfigs', 'breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link" => "/students", "name" => "Estudiantes"],
            ["name" => "Editar"]
        ];


        /*      $institutes=Institute::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id','type'); */

        /* dd($student); */

        return view('students.edit', compact('student', 'pageConfigs', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Student $student)
    {
        
        $student->fill(array_merge($request->except('status'), [
            'status' => $request->status == 'on' ? 'ACTIVO' : 'INACTIVO'
        ]))
            ->save();

        return redirect()->route('students.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function pdf(Student $student)
    {

        $students = Student::where('document_number', $student->document_number)
            ->get()
            ->groupBy('full_name')->toBase();

        $pdf = PDF::loadView('reports.certificate', compact('students', 'student'))->setPaper('A4', 'portrait')
            ->setOptions(['isRemoteEnabled' => true, 'isHtml5ParserEnabled' => false, 'isPhpEnabled' => true]);


        return $pdf->stream();
    }
}

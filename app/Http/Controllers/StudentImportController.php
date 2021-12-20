<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ExcelData;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;


class StudentImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/students","name" => "Estudiantes"],
            ["name" => "Importar"]
        ];

        
        return view('students.import',compact('breadcrumbs','pageConfigs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);


        $file = $request->file('file')->store('import');

        $import = new StudentImport;

        $import->import($file);

        /* dd($import->failures()); */

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

        return back()->withStatus('Importación completada');

/*         return redirect()->route('students.import.index')->with('success', 'Importado satisfactoriamente.'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
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

 /*    public function parseImport(ExcelImportRequest $request)
    {
        if ($request->has('header')) {
            $headings = (new HeadingRowImport)->toArray($request->file('excel_file'));
            $data = Excel::toArray(new StudentImport, $request->file('excel_file'))[0];
        } else {
            $data = array_map('str_getcsv', file($request->file('excel_file')->getRealPath()));
        }

        if (count($data) > 0) {
            $excel_data = array_slice($data, 0, 2);

            $excel_data_file = ExcelData::create([
                'excel_filename' => $request->file('excel_file')->getClientOriginalName(),
                'excel_header' => $request->has('header'),
                'excel_data' => json_encode($data)
            ]);
        } else {
            return redirect()->back();
        }

        return view('students.import_fields', [
            'headings' => $headings ?? null,
            'excel_data' => $excel_data,
            'excel_data_file' => $excel_data_file
        ]);
    }

    public function processImport(Request $request)
    {
        $data = Student::find($request->excel_data_file_id);
        $excel_data = json_decode($data->excel_data, true);
        foreach ($excel_data as $row) {
            $student = new Student();
            foreach (config('app.db_fields') as $index => $field) {
                if ($data->excel_header) {
                    $student->$field = $row[$request->fields[$field]];
                } else {
                    $student->$field = $row[$request->fields[$index]];
                }
            }
            $student->save();
        }

        return redirect()->route('students.index')->with('success', 'Import finished.');
    } */
}

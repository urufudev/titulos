<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;

class FindController extends Controller
{
    
    public function search($dni)
    {
/*         $pageConfigs = ['pageHeader' => true,'mainLayoutType' => 'horizontal-menu'];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/institutes","name" => "Institutos"],
            ["name" => "Crear"]
        ];

        $search = Student::where('document_type','=',$request->document_type)
        ->where('document_number','=',$request->document_number)
        ->get();
        
        return view('front.search',compact('search','pageConfigs','breadcrumbs')); */

        if (Student::where('document_number', $dni)->exists()) {
            $student = Student::where('document_number', $dni)->with('institute','carrer')->get();
            return StudentResource::collection($student,200);
          } else {
            return response()->json([
              "message" => "No se encontro el Estudiante"
            ], 404);
          }


       /* FUNCIONA
       
        $student = Student::where('document_number', $dni)->with('institute','carrer')->get();

        return StudentResource::collection($student); 
        
        */

        /* return Student::where('document_number', $dni)->with('institute','carrer')->get(); */
        /* return StudentCollection::collection(Student::where('document_number', $dni)->with('institute','carrer')->get()); */
    }
}

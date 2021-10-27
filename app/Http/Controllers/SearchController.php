<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class SearchController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => true,'mainLayoutType' => 'horizontal-menu'];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/institutes","name" => "Institutos"],
            ["name" => "Crear"]
        ]; 
        /* dd($request); */
/*         $search = Student::where('document_type','=',$request->document_type)
        ->where('document_number','=',$request->document_number)
        ->get();
    if(count($search) > 0)
        return view('search.index',compact('pageConfigs','breadcrumbs'))->withDetails($search)->withQuery ( $request );
    else return view ('search.index',compact('pageConfigs','breadcrumbs'))->withMessage('No Details found. Try to search again !');
 */
        return view('search.index',compact('pageConfigs','breadcrumbs'));
    }

    public function find(Request $request)
    {
       

        $baseUrl = 'http://10.15.1.250:8000/api/';

        $dni = $request->document_number;

 

        $student = HTTP::get($baseUrl.'v1/students/search/'.$dni)->json();
        
        
        dd($student);

        /* $listStudent = $student->json();
 */
        


    }
}

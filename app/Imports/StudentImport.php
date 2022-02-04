<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Carrer;
use App\Models\Student;
use App\Models\Institute;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements 
        ToModel, 
        WithHeadingRow,
        SkipsOnError,
        WithValidation,
        SkipsOnFailure
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable, SkipsErrors, SkipsFailures;

    public function model(array $row)
    {

        $institute =  Institute::where('modular',$row['modular'])->first();
        $carrer = Carrer::where('name', $row['carrera'])->where('institute_id',$institute->id)->first();
       
        /* dd($institute->id,$carrer->id, $row['carrera'],$row['modular']); */
        return new Student([
            'institute_id' => $institute->id,
            'carrer_id' => $carrer->id,
            'name' => $row['nombre'],
            'ap_paterno' => $row['ap_paterno'],
            'ap_materno' => $row['ap_materno'],
            'document_type' => $row['tipo_documento'],
            'document_number' => $row['numero_documento'],
            'title_number' => $row['numero_titulo'],
            'title_name' => $row['nombre_titulo'],
            'title_level' => $row['nivel_titulo'],
            'title_date' => Date::excelToDateTimeObject($row['fecha_titulo']),
            'title_code' => $row['codigo_titulo'],
            'title_regnumber' => $row['numregistro_titulo'],
            'title_resnumber' => $row['numresolucion_titulo'],
            'title_regdate' => Date::excelToDateTimeObject($row['fechareg_titulo']),
            'title_regbook' => $row['libroreg_titulo'],
            'title_folio' => $row['folio_titulo'],
            'ins_director' => $row['director_ins'],
            'ins_secretary' => $row['secreataria_ins'],
            'dre_secretary' => $row['secreatario_dre'],
            'dre_certificate' => $row['certificados_dre'],
            


        ]);
    }

    public function rules(): array
    {
        return [
            '*.numero_titulo' => [ 'unique:students,title_number']
        ];
    }


    /* public function customValidationMessages()
    {
        return ['title_number.unique' => 'Numero de Titulo ya en uso'];
    } */

    public function customValidationAttributes()
    {
        return [
            'numero_titulo' => 'Numero de Titulo',                                            
        ];
    }        



/*     public function onFailure(Failure ...$failure)
    {
    } */
}

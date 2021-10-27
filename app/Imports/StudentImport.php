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

        $institute =  Institute::where('name',$row['institute'])->first();
        $carrer = Carrer::where('name', $row['carrer'])->where('institute_id',$institute->id)->first();

        /* dd($institute->id,$carrer->id, $row['carrer'],$row['institute']); */
        return new Student([
            'institute_id' => $institute->id,
            'carrer_id' => $carrer->id,
            'name' => $row['name'],
            'ap_paterno' => $row['ap_paterno'],
            'ap_materno' => $row['ap_materno'],
            'document_type' => $row['document_type'],
            'document_number' => $row['document_number'],
            'title_number' => $row['title_number'],
            'title_name' => $row['title_name'],
            'title_level' => $row['title_level'],
            'title_date' => Date::excelToDateTimeObject($row['title_date']),
            'title_code' => $row['title_code'],
            'title_regnumber' => $row['title_regnumber'],
            'title_resnumber' => $row['title_resnumber'],
            'title_regdate' => Date::excelToDateTimeObject($row['title_regdate']),
            'title_regbook' => $row['title_regbook'],
            'title_folio' => $row['title_folio'],
            'ins_director' => $row['ins_director'],
            'ins_secretary' => $row['ins_secretary'],
            'dre_secretary' => $row['dre_secretary'],
            'dre_certificate' => $row['dre_certificate'],
            


        ]);
    }

    public function rules(): array
    {
        return [
            '*.title_number' => [ 'unique:students,title_number']
        ];
    }


    /* public function customValidationMessages()
    {
        return ['title_number.unique' => 'Numero de Titulo ya en uso'];
    } */

    public function customValidationAttributes()
    {
        return [
            'title_number' => 'Numero de Titulo',                                            
        ];
    }        



/*     public function onFailure(Failure ...$failure)
    {
    } */
}

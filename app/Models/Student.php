<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kayandra\Hashidable\Hashidable;

class Student extends Model
{
    use HasFactory, Hashidable;

    protected $fillable = [
        'institute_id', 'carrer_id', 'name', 'ap_paterno', 'ap_materno', 'document_type', 'document_number', 'title_number',
        'title_name', 'title_level', 'title_date', 'title_code', 'title_regnumber', 'title_resnumber', 'title_regdate', 'title_regbook',
        'title_folio', 'ins_director', 'ins_secretary', 'dre_secretary', 'dre_certificate', 'title_pdf'
    ];

    protected $dates = ['title_date', 'title_regdate'];

    public function getFullNameAttribute()
    {
        return "{$this->ap_paterno} {$this->ap_materno}, {$this->name}";
    }

    public function getTitleDateFormatedAttribute()
    {
        return $this->title_date
            ? $this->title_date->format('d/m/Y')
            : 'Sin Datos';
    }

    public function getTitleRegDateFormatedAttribute()
    {
        return $this->title_regdate
            ? $this->title_regdate->format('d/m/Y')
            : 'Sin Datos';
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function carrer()
    {
        return $this->belongsTo(Carrer::class);
    }

    public function getTransformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

    /*     public function scopeSearch($query, $val)
    {
        return $query
        ->where('students.document_number','like','%'.$val.'%')
        ->Orwhere('students.name','like','%'.$val.'%')
        ->Orwhere('students.ap_paterno','like','%'.$val.'%')
        ->Orwhere('students.ap_materno','like','%'.$val.'%')
        ->Orwhere('ins.name','like','%'.$val.'%')
        ->Orwhere('car.name','like','%'.$val.'%')
        
        ;
    } */

    public function scopeSearch($query, $val)
    {
        return $query
            ->where('name', 'like', '%' . $val . '%')
            ->Orwhere('ap_paterno', 'like', '%' . $val . '%')
            ->Orwhere('ap_materno', 'like', '%' . $val . '%')
            ->Orwhere('document_number', 'like', '%' . $val . '%')
            ->WhereHas('institute', function ($query) use ($val) {
                $query->where('name', 'like', '%' . $val . '%');
            })
            ->orWhereHas('carrer', function ($query) use ($val) {
                $query->where('name', 'like', '%' . $val . '%');
            });
    }

    public function scopeSearchStudent($query, $val)
    {
        return $query
            ->where('students.document_type', 'like', '%' . $val . '%')
            ->where('students.document_number', 'like', '%' . $val . '%');
    }
}

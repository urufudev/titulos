<?php

namespace App\Http\Livewire\Students;

use App\Models\Institute;
use App\Models\Carrer;
use App\Models\Student;
use Livewire\Component;

class Select extends Component
{
    public $institutes;
    public $carrers;

    public $typeinsti;

    public $institute = null;
    public $carrer = null;
    
    public $student = null;

    public $level_tecnologico = null;
    public $level_pedagogico = null;

    public function mount($carrer = null)
    {
        $this->institutes = Institute::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        /* ->pluck('name','id'); */
        ->get();
        /* $this->carrers = collect(); */
        
        
        $firstInstitute = Institute::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->get()
        ->first();

        $this->carrers = Carrer::where('institute_id', $firstInstitute->id)->get();


        $this->typeinsti = $firstInstitute->type;

        if (!is_null($carrer)) {
            $carrerx = Carrer::with('institute')->find($carrer);

            /* dd($carrerx); */
            if ($carrerx) {
                $this->carrers = Carrer::where('institute_id', $carrerx->institute_id)->get();
                $this->institute = $carrerx->institute_id;
                /* $this->carrer = $carrerx->state_id; */


                $this->typeinsti = Institute::where('id',$carrerx->institute_id)->pluck('type')->first();


                /* if ($this->typeinsti == 'TECNOLOGICO') {
                    $this->level_tecnologico = array('TECNICO','PROFESIONAL TECNICO','PROFESIONAL');
                }
                elseif($this->typeinsti == 'PEDAGOGICO'){
                    $this->level_tecnologico = array('INICIAL','PRIMARIA','SECUNDARIA');
                } */
            }
        }

        

    }

    public function render()
    {

        

        return view('livewire.students.select',/* [
            'students' => Student::with('city.country')->latest()->take(5)->get()
        ] */);
    }

    public function updatedInstitute($value)
    {
        $this->carrers = Carrer::where('institute_id', $value)->get();
        $this->carrer = /* $this->carrers->first()->id ?? */ null;

        $this->typeinsti = Institute::where('id',$value)->pluck('type')->first();

        /* dd($this->typeinsti); */
    }
}

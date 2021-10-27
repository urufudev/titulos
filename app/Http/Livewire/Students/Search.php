<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Http\Request;

class Search extends Component
{
    public $document_type;
    public $document_number;
    public $students;

    protected $rules = [
        'document_type' => 'required',
        'document_number' => 'required|numeric|digits:8',
    ];

    protected $validationAttributes = [
        'document_type' => 'Tipo de Documento',
        'document_number' => 'Número de Documento'
    ];

    public function findStudent()
    {
       
        /* dd($this->document_type); */
        $this->validate();


        $students = Student::where('document_type','=',$this->document_type)
        ->where('document_number','=',$this->document_number)
        ->get();
        $this->resetInput();




        $this->students = $students;



        /* dd($this->students); */

        /* dd($search); */
    }


    public function render()
    {
        
        
        return view('livewire.students.search');
    }

    private function resetInput()
    {
        $this->document_type = 1;
        $this->document_number = null;
    }
}

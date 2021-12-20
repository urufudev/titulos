<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
    public $document_type;
    public $document_number;
    public $students;

    public $name;
    public $ap_paterno;
    public $ap_materno;

    public $captcha;
    public $captcha_2;

    public $tab = 1;

    /*     protected $rules = [
        
        'document_number' => 'required|numeric|digits_between:8,10',

        'name' => 'required',
        'ap_paterno' => 'required',
        'ap_materno' => 'required',

        'captcha' => 'required|captcha'
    ];

    protected $validationAttributes = [
        
        'document_number' => 'Número de Documento',
        'captcha' => 'Suma de captcha',
    ];

    protected $messages = [
        'captcha.captcha' => 'La suma es incorrecta.',
    ];
 */






    public function reloadCaptcha()
    {
        $this->students = null;
        return response()->json(['captcha' => Captcha::img('math')]);
    }
    /* 
    public function reloadCaptcha_2()
    {
        $this->students = null;
        return response()->json(['captcha_2'=> Captcha::img('math') ]);
    }
    
 */
    public function updateTab1()
    {
        $this->tab = 1;
        $this->students = null;
    }
    public function updateTab2()
    {
        $this->tab = 2;
        $this->students = null;
    }

    public function findStudent()
    {
        $this->students = null;

        /* dd($this->document_type); */
        /* $this->validate(); */

        $this->validate(
            [
                'document_number' => 'required|numeric|digits_between:8,10',
                'captcha' => 'required|captcha'
            ],

            [
                'captcha.captcha' => 'La suma es incorrecta.',
            ],
            [
                'document_number' => 'Número de Documento',
                'captcha' => 'Suma de captcha',
            ]
        );


        $students = Student::where('document_number', '=', $this->document_number)
            ->get()
            ->groupBy('full_name')->toBase();

        /* dd($students); */

        $this->tab = 1;

        $this->resetInput();

        $this->students = $students;

        /* dd($this->students); */

        /* dd($search); */
    }

    public function findStudentFullName()
    {
        $this->students = null;

        /* dd($this->document_type); */
        /*  $this->validate(); */

        $this->validate(
            [
                'name' => 'required',
                'ap_paterno' => 'required',
                'ap_materno' => 'required',
                'captcha_2' => 'required|captcha'
            ],

            [
                'captcha_2.captcha' => 'La suma es incorrecta.',
            ],
            [
                'name' => 'Nombre',
                'ap_paterno' => 'Apellido Paterno',
                'ap_materno' => 'Apellido Materno',
                'captcha_2' => 'Suma de captcha',
            ]
        );

        $students = Student::where('name', '=', $this->name)
            ->where('ap_paterno', '=', $this->ap_paterno)
            ->where('ap_materno', '=', $this->ap_materno)
            ->get()
            ->groupBy('full_name')->toBase();

        /* dd($students); */

        $this->tab = 2;

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

        $this->document_number = null;
        $this->captcha = null;
        $this->captcha_2 = null;

        $this->name = null;
        $this->ap_paterno = null;
        $this->ap_materno = null;
    }
}

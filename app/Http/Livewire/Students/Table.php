<?php

namespace App\Http\Livewire\Students;

use App\Models\Carrer;
use App\Models\Institute;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class Table extends Component
{
   

    /*-----------------DATATABLE -----------------*/
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search'=> ['except'=> ''],
        'perPage'
    ];

    public $isOpen = false;
    public $perPage = 10;
    public $sortField = "students.id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

/*         $students = Student::query()
            ->search($this->search)
            ->join('institutes as ins','students.institute_id', '=', 'ins.id' )
            ->join('carrers as car','students.carrer_id', '=', 'car.id' )
            ->select('students.id','students.name','students.ap_paterno' ,'students.ap_paterno' ,'students.document_number' 
            ,'students.institute_id','students.carrer_id', 'ins.name as insname','car.name as carname', )
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            
            ->paginate($this->perPage); */

            $students = Student::query()
            ->with('institute')
            
            ->search($this->search)
            
            ->orderBy(Institute::select($this->sortField)->whereColumn('institutes.id', 'students.institute_id'), $this->sortAsc ? 'desc' : 'asc')
            /* ->orderBy(Carrer::select($this->sortField)->whereColumn('carrers.id', 'students.carrer_id'), $this->sortAsc ? 'desc' : 'asc') */
            ->paginate($this->perPage);

        return view('livewire.students.table',compact('students'));
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search= '';
        $this->page= 1;
        $this->perPage= 10;
    }


    public function destroy($student)
    {
       /*  $studentx =  Student::findByHashId($student);
        dd($studentx);   */ 
        Gate::authorize('forceDelete',$student);
        $find_student  = Student::findOrFail($student);

        $find_student->delete();
        $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
        session()->flash('danger', 'Se elimino el estudiante.');
        return redirect()->to('/students'.$url);
        /* if ($student->status == 'ACTIVO') {
            $student->update(['status' => 'INACTIVO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a inactivo correctamente.');
            return redirect()->to('/students'.$url);
            
           
        }
        else {
            $student->update(['status' => 'ACTIVO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a activo correctamente.');
            return redirect()->to('/students'.$url);
           
        }  */
    }
    
}
<?php

namespace App\Http\Livewire\Roles;


use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
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
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $roles = Role::query()
            
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);

        return view('livewire.roles.table',compact('roles'));
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


    public function destroy(Role $role)
    {
        
        Gate::authorize('forceDelete',$role);
        $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
      
            $role->delete();
            session()->flash('danger', 'Rol eliminado');
        
        return redirect()->to('/roles'.$url);
    }
    
}

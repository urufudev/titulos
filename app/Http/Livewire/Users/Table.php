<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
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
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $users = User::query()
            ->search($this->search)
            
            
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);

            /* dd($users->offices); */

            

        return view('livewire.users.table',compact('users'));
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


    public function destroy(User $user)
    {
        
        Gate::authorize('forceDelete',$user);
        /* dd($user); */
        if ($user->status == 'ACTIVO') {
            $user->update(['status' => 'SUSPENDIDO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a suspendido correctamente.');
            return redirect()->to('/users'.$url);
            
            /* return back()->with('info', 'SE CAMBIO A SUSPENDIDO CORRECTAMENTE '); */
        }
        elseif($user->status == 'SUSPENDIDO') {
            $user->update(['status' => 'ACTIVO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a activo correctamente.');
            return redirect()->to('/users'.$url);
            /* return back()->with('warning', 'SE CAMBIO A ACTIVO CORRECTAMENTE '); */
        } 
    }
    
}


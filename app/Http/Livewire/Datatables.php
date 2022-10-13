<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class Datatables extends Component
{
    use WithPagination;
    public $search;
    // public $male = 'male';
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search', 'sortField', 'sortAsc'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function sortBy($field)
    {
        if($this->sortField === $field){
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field; 
    }

    public function render()
    {
        return view('livewire.datatables', [
            'persons' => Person::where(function($query){
                $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            })->when($this->sortField, function($query){
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate(20)]);
            // ->where('gender', $this->male)
            
    }
}

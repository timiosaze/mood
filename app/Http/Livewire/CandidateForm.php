<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CandidateForm extends Component
{
    public $comment;
    public $achievement;

    public function render()
    {
        return view('livewire.candidate-form');
    }
}

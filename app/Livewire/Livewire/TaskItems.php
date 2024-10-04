<?php

namespace App\Livewire\Livewire;

use Livewire\Component;

class TaskItems extends Component
{
    public $tasks;
 
    public function mount($tasks)
    {
        $this->tasks = $tasks;
    }
    public function render()
    {
        return view('livewire.task-items');
    }
}
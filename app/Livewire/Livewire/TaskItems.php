<?php

namespace App\Livewire\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class TaskItems extends Component
{

    #[On('created')]
    public function refresh()
    {
        $this->dispatch('$refresh');
    }
 
    public function render()
    {
        return view('livewire.task-items', [
            'tasks' => auth()->user()->tasks,
        ]);
    }
}
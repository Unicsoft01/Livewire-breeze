<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Lazy;
 
#[Lazy]
class Index extends Component
{

    public function render()
    {
        return view('tasks.index', [
            'tasks' => auth()->user()->tasks,
        ]);
    }
}
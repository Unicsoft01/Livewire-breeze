<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class TaskCount extends Component
{
    #[Reactive]
    public $taskByStatus;
    public function mount($taskByStatus){
        $this->taskByStatus = $taskByStatus;
    }
    public function render()
    {
        return view('tasks.task-count');
    }
}
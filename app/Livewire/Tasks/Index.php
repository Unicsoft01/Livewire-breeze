<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class Index extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    
    public $tasks = [];

    public $task = '';


    public function mount()
    {
        $this->tasks = ['first task', 'last task', 'all tasks'];
    }

    public function render()
    {
        return view('tasks.index');
    }
}
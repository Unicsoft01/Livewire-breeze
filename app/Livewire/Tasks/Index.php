<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public $tasks = [];

    public $task = '';


    public function mount()
    {
        $this->tasks = ['first task', 'last task', 'all tasks'];
    }

    public function store()
    {
        // dd($this->title, $this->slug, $this->description, $this->status, $this->priority, $this->deadline);
        // validation logics
        auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority','deadline']));
        // display a session flash message
        session()->flash('status', 'Saved successfully.');
        // no need to redirect back like in a normal conroller

        $this->reset();
    }

    public function render()
    {
        return view('tasks.index');
    }
}
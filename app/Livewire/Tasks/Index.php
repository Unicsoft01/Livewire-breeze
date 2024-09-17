<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    #[Validate('required|min:5|max:50')]
    public $title;
    
    #[Validate('required|min:5|max:50|')]
    public $slug;
    
    #[Validate('max:100', as: 'Post Description')]
    public $description;
    
    #[Validate('required')]
    public $status;
    
    #[Validate('required')]
    public $priority;
    
    #[Validate('required')]
    public $deadline;

    public $tasks = [];

    public $task = '';


    public function mount()
    {
        $this->tasks = ['first task', 'last task', 'all tasks'];
    }

    public function store()
    {
        $this->validate(); 
        // dd($this->title, $this->slug, $this->description, $this->status, $this->priority, $this->deadline);
        // validation logics
        // auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority','deadline']));
        auth()->user()->tasks()->create($this->pull());
        // display a session flash message
        session()->flash('status', 'Saved successfully.');
        // no need to redirect back like in a normal conroller

        // $this->reset();
    }

    public function render()
    {
        return view('tasks.index');
    }
}
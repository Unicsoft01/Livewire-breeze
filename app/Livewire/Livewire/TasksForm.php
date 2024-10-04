<?php

namespace App\Livewire\Livewire;

use Livewire\Component;
use App\Livewire\Forms\TaskForm;

class TasksForm extends Component
{
    public TaskForm $form;

    public function store()
    {
        $this->form->save();

        $this->dispatch('created');

        $this->dispatch(
            'swal',
            [
                'title' => 'Saved Successfully!',
                'message' => 'You just created a new post!',
                'icon' => 'success'
            ]
        );
        
    }

    public function render()
    {
        return view('livewire.tasks-form');
    }
}
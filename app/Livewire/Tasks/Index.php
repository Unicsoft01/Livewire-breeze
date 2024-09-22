<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class Index extends Component
{
    public TaskForm $form;

    public function store()
    {
        $this->form->save();

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
        return view('tasks.index');
    }
}
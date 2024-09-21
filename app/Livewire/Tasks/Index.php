<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class Index extends Component
{
    public TaskForm $form;

    public function store()
    {
        
        $this->form->save(); //return $this->redirect('/posts');
    }

    public function render()
    {
        return view('tasks.index');
    }
}
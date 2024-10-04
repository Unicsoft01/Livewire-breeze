<?php

namespace App\Livewire\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy('on-load')]
class TaskItems extends Component
{

    #[On('created')] // alternate place this on the render method to automatically re-render the component
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

    // to be used by lazy loading
    public function placeholder(array $params = [])
    {
        return view('livewire.placeholders.tasks-skeleton', $params);
    }
}
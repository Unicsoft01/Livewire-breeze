<?php

namespace App\Livewire\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
// use Livewire\Attributes\Lazy;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Tasks;
use DB;

// #[Lazy('on-load')]
class TaskItems extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[On('created')] // alternate place this on the render method to automatically re-render the component
    public function refresh()
    {
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.task-items', [
            'tasks' => auth()->user()->tasks()->paginate(3),
            'taskByStatus' => auth()->user()->tasks()->select('status', DB::raw('COUNT(*) as count'))->groupBy('status')->orderBy('status', 'desc')->get(),
        ]);
    }

    // to be used by lazy loading
    public function placeholder(array $params = [])
    {
        return view('livewire.placeholders.tasks-skeleton', $params);
    }

    public function changeStatus($id, $status)
    {
        $task = Tasks::find($id);

        $task->update([
            'status' => $status,
        ]);

        $this->dispatch(
            'swal',
            [
                'title' => 'Saved Successfully!',
                'message' => 'Status changed Successfully!',
                'icon' => 'success'
            ]
        );
    }
}
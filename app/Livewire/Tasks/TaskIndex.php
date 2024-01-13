<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskIndex extends Component
{

    public $tasks;

    public function mount()
    {
        $this->tasks = Task::with('users')->get();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->title('Tasks - Hosting Livewire')
            ->with([
                'button' => 'New task'
            ]);
    }
}

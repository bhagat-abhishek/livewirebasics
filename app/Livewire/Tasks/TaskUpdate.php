<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;

class TaskUpdate extends Component
{

    #[On('task-updated')]
    public function updateTimestamp()
    {
        Task::query()->update([
            'updated_at' => now(),
        ]);
    }

    public function render()
    {
        return view('livewire.tasks.task-update');
    }
}

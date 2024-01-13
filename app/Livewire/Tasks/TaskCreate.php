<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Layout;

class TaskCreate extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tasks.task-create')
            ->title('Create Tasks - Hostinger Livewire');
    }
}

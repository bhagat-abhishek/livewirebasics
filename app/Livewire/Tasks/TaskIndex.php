<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TaskIndex extends Component
{

    public $tasks;

    #[Rule('required|max:10|string')]
    public $name;

    public function mount()
    {
        // $this->tasks = Task::with('users')->get();
    }

    public function hydrate()
    {
        // dd("OK");
    }

    public function boot()
    {
        $this->tasks = Task::with('users')->get();
    }

    public function updating()
    {
        // 
    }

    public function updated()
    {
        // 
    }

    public function rendering($view, $data)
    {
        // $data['name'] = "Abby";
        // dd($data);
    }

    public function rendered($view, $html)
    {
        // dd($html);
    }

    public function dehydrate()
    {
        // $this->tasks = $this->tasks->toArray();

        // dd($this->tasks);
    }

    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        session()->flash('message', 'Task Successfully Created');

        $this->dispatch('task-updated');

        return $this->redirect(route('tasks'));
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

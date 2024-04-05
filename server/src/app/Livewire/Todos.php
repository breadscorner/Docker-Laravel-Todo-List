<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TodoList;

class Todos extends Component
{
  public $todos = []; // all of the records in db
  public $newTodo = ''; // the new todo to be added

  public function add() {
    $todo = new TodoList(['text' => $this->newTodo, 'done' => false]);
    $todo->save();
    $this->todos[] = $todo;
  }
  public function select($id) {
    $todo = $this->todos[$id - 1];
    $todo->done = !$todo->done;
    $todo->save();
  }
  public function mount() {
    $this->todos = TodoList::all();
  }
    public function render()
    {
        return view('livewire.todos');
    }
}

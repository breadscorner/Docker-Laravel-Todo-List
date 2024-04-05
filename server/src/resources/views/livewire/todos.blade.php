<div>
  <ul>
    @foreach ($todos as $todo)
    <li>
      <span @class(['complete' => $todo->done])>{{ $todo->text }}</span>
      <input type="checkbox" wire:click="select({{ $todo->id }})" {{ $todo->done ? 'checked' : '' }}>
    </li>
    @endforeach
</ul>   
<div>
  <input type="text" wire:model="newTodo">
  <button wire:click="add">Add</button>
</div>
</div>

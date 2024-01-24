<div>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="createItem">
        <label for="name">Name:</label>
        <input wire:model="name" type="text" id="name" name="name" />

        <label for="description">Description:</label>
        <textarea wire:model="description" id="description" name="description"></textarea>

        <button type="submit">Create Item</button>
    </form>
</div>


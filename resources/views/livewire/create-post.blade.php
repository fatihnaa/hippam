

<div>
    <form wire:submit="simpan">
        <input type="text" wire:model.live="form.title">
        <div>@error('form.title') {{ $message }} @enderror</div>

        <input type="text" wire:model.blur="form.content" wire:dirty.class="border-red-500">
        <div>@error('form.content') {{ $message }} @enderror</div>

        <button type="submit">Simpan</button>
    </form>
</div>

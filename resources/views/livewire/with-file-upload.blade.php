<form wire:submit.prevent="save">
    <input type="file" wire:model="photo" multiple>
 
    @error('photo') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit">Save Photo</button>
    <div wire:loading.delay.long>
        <span class="text-green-500"> Sending... </span>
    </div>
</form>


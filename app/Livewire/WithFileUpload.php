<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attribute\Validate;

class WithFileUpload extends Component
{
    use WithFileUploads;

    public $photo=[];

    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);
 
        foreach ($this->photos as $photo) {
            $photo->store('photos');
        }
    }
}
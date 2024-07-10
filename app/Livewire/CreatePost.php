<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
        public PostForm $form;
        public function simpan(){

        $this->validate();
        Post::create(
            $this->form->All()
        );

        return $this->redirect('/post');
    }
    
    public function render()
    {
        return view('livewire.create-post');
    }
}

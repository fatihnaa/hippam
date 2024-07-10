<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    
    #[Validate('required',as: 'Judul')]
    #[Validate('min:3', message: "Judul minimal 3 karakter")]
    public $title='';

    #[Validate('required|min:3')]
    public $content;

}

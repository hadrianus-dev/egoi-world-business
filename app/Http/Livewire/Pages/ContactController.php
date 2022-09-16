<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ContactController extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-controller')->layout('layouts.base');
    }
}

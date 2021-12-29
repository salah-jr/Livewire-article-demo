<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email',
        'message' => 'required|min:16',
    ];

public function saveMessage(){

    $this->validate();

    $message = Message::create([
        'name' => $this->name,
        'email' => $this->email,
        'message' => $this->message,
    ]);

    if ($message) 
    {
        session()->flash('success', 'Thank you for your Message.');
    } 
    else 
    {
        session()->flash('error', 'Failed to send your message.');
    }

    $this->resetFormFields();
}

    public function resetFormFields()
    {
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

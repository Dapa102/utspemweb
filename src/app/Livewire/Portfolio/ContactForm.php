<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
        $this->successMessage = 'Thank you for reaching out! I will get back to you soon.';
    }

    public function render()
    {
        return view('livewire.portfolio.contact-form');
    }
}

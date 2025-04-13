<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';
    
    public string $password_confirmation = '';

    public function login()
    {
        $this->validate();

        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {

            return redirect()->intended('home');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
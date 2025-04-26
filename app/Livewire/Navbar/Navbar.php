<?php

namespace App\Livewire\Navbar;

use App\Models\User;
use Livewire\Component;

class Navbar extends Component
{
    public User $user;
    public string|null $username;
    public string|null $profilePicture;

    public function mount()
    {
        $userId = auth()->user()->id;
        $currentUser = User::find($userId);

        if (!$currentUser) abort(404, 'User not found');
        $this->user = $currentUser;

        $username = $currentUser?->name ?? '';
        $this->username = $username;

        $this->profilePicture = $currentUser?->profile_picture ?? 'https://cdn.discordapp.com/attachments/671019079372636171/1360721693185806387/IMG_9578.jpg?ex=680df294&is=680ca114&hm=efa98f5b6b876fd9eb05129f8dc42dae72b7d07f47fb97d01a48b1175f0752e7&';
    }


    public function render()
    {
        return view('livewire.navbar.navbar');
    }
}

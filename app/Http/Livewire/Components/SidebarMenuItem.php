<?php

namespace App\Http\Livewire\Components;

use App\Models\Settings;
use Livewire\Component;

class SidebarMenuItem extends Component
{
    public function render()
    {
        return view('livewire.components.sidebar-menu-item', [
            'sidebarItems' => Settings::all()
        ]);
    }
}

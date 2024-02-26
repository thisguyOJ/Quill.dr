<?php

namespace App\Http\Livewire;

use Livewire\Component;
/**
 * the public function can be sent into a sidebar controller
 * but we are going to have 2 sidebars 
 */


class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.sidebar');
    }
} ?>

<div class="fixed inset-y-0 left-0 w-64 bg-white-800 text-black shadow-md">
    <div class="p-6">
        <h1 class="text-2xl font-bold"></h1>
    </div>

    <nav class="text-2xl font-bold py-2">
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Rolodex</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Groups</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Meet</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-30">Create</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Saved</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Events</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">Ads</a>
        <a href="#" class="block px-24 py-6 hover:bg-gray-700 active:bg-blue-700 focus:outline-none focus:ring-violet-300">News</a>
    </nav>
</div>
<?php

use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new class extends Component {

/**creating a form, when the "Quill" button is pressed, we
store the information
*/

/*
    a store function, returns void(type hinting)
    we check whether the user is authenticated/validated.
    In the context of the form, we check for the user who's writing 
    the message, so authenticate the current user, then store the message.
*/


    #[Rule('required|string|max:255')]
/* using the livewire rule attribute, and laravels validation feature to ensure
that the user provides a message that doesn't exceed the 255 character limit of the datatbase
column.

a record is created belonging to the logged in user.
*/

    public $message = '';
# to store the information 
    public function store(): void{
        $validated = $this->validate();
        auth()->user()->quill()->create($validated);
        $this->message = '';
        $this->dispatch('quill-created');
    }
}; ?>

<form wire:submit="store">
    <div>
        <textarea 
            wire:model="message"
            placeholder="{{__('Dear diary,') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>

        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Quill') }}</x-primary-button>
    </div>
</form>
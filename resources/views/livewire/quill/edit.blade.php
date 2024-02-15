<?php
 
use App\Models\Quill; 
use Livewire\Attributes\Validate; 
use Livewire\Volt\Component;
 
new class extends Component
{
    public Quill $quill; 
 
    #[Validate('required|string|max:255')]
    public string $message = '';
 
    public function mount(): void
    {
        $this->message = $this->quill->message;
    }
 
    /**
     * we validate the user, to make sure that only the authorized
     * user connect to that account can update that message.
     * 
     * in the below function/behaviour, when the quill-update is dispatched
     * we open a form for editing that message.
     */
    public function update(): void
    {
        $this->authorize('update', $this->quill);
 
        $validated = $this->validate();
 
        $this->quill->update($validated);
 
        $this->dispatch('quill-updated');
    }
    /**
     * when the user decides to cancel the edit form,
     * the cancel function is called.
     * 
     * the quill state is equal to "null"
     */
    public function cancel(): void
    {
        $this->dispatch('quill-edit-canceled');
    }  
}; ?>
 
<div>
    // 
    <form wire:submit="update"> 
        <textarea
            wire:model="message"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
        <button class="mt-4" wire:click.prevent="cancel">Cancel</button>
    </form> 
</div>
<?php

namespace App\Policies;

use App\Models\Quill;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class QuillPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Quill $quill): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */

    /**make sure that the authorized/current user is that only
    * one that can update the quill/message/entry
    * quill belongs to user is = users
    */

    public function update(User $user, Quill $quill): bool
    {
        return $quill->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Quill $quill): bool
    {
        //
        return $this->update($user, $quill);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Quill $quill): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Quill $quill): bool
    {
        //
    }
}

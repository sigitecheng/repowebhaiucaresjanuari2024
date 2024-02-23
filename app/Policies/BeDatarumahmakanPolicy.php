<?php

namespace App\Policies;

use App\Models\User;
use App\Models\be_datarumahmakan;
use Illuminate\Auth\Access\Response;

class BeDatarumahmakanPolicy
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
    public function view(User $user, be_datarumahmakan $beDatarumahmakan): bool
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
    public function update(User $user, be_datarumahmakan $beDatarumahmakan): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, be_datarumahmakan $beDatarumahmakan): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, be_datarumahmakan $beDatarumahmakan): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, be_datarumahmakan $beDatarumahmakan): bool
    {
        //
    }
}

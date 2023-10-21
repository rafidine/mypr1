<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ElecteurPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function view(User $user, Electeur $electeur)
    {
        return $user->id === $electeur->user_id;
    }
    
    public function update(User $user, Electeur $electeur)
    {
        return $user->id === $electeur->user_id;
    }
    
    public function delete(User $user, Electeur $electeur)
    {
        return $user->id === $electeur->user_id;
    }
    
}

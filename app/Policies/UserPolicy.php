<?php

// File: app/Policies/UserPolicy.php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'Admin';
    }

    public function view(User $user, User $targetUser)
    {
        return $user->role === 'Admin';
    }

    public function create(User $user)
    {
        return $user->role === 'Admin';
    }

    public function update(User $user, User $targetUser)
    {
        return $user->role === 'Admin' || ($user->id === $targetUser->id && $user->role === 'Dokter');
    }

    public function delete(User $user, User $targetUser)
    {
        return $user->role === 'Admin';
    }
}

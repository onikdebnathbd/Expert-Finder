<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class  UserPolicy
{
    use HandlesAuthorization;

    //This function will return true or false. if true then admins will be able to access otherwise not
    protected function getPermission($user, $permission_id) {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $permission_id) {
                    return true;
                }
            }
        }
        return false;
    }


    public function profession(User $user)
    {
        return $this->getPermission($user, 36);
    }

    public function education(User $user)
    {
        return $this->getPermission($user, 37);
    }

    public function ad(User $user)
    {
        return $this->getPermission($user, 38);
    }
}

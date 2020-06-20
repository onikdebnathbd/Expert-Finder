<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  PermissionPolicy
{
    use HandlesAuthorization;

    //This function will return true or false. if true then admins will be able to access otherwise not
    protected function getPermission($admin, $permission_id) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $permission_id) {
                    return true;
                }
            }
        }
        return false;
    }

    //This function will return true when the permission id of an authorized users role will be 9(view permission) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 9);
    }

    //This function will return true when the permission id of an authorized users role will be 10(edit permission) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 10);
    }
}

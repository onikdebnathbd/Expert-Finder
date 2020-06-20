<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  RolePolicy
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

    //This function will return true when the permission id of an authorized users role will be 5(view role) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 5);
    }

    //This function will return true when the permission id of an authorized users role will be 6(create role) otherwise false
    public function create(Admin $admin)
    {
        return $this->getPermission($admin, 6);
    }

    //This function will return true when the permission id of an authorized users role will be 7(edit role) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 7);
    }

    //This function will return true when the permission id of an authorized users role will be 8(delete role) otherwise false
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin, 8);
    }

    //This function will return true when the permission id of an authorized users role will be 5(view role) & 6(create role) both
    //or only 5(view role) or only 6(create role) otherwise false
    public function view_create($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 5 && $permission->id == 6) || $permission->id == 5 || $permission->id == 6) {
                    return true;
                }
            }
        }
        return false;
    }
}

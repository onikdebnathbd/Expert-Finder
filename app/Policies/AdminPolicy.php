<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  AdminPolicy
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


    //This function will return true when the permission id of an authorized users role will be 1(view user) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 1);
    }
    //This function will return true when the permission id of an authorized users role will be 2(create user) otherwise false
    public function create(Admin $admin)
    {
        return $this->getPermission($admin, 2);
    }
    //This function will return true when the permission id of an authorized users role will be 3(edit user) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 3);
    }
    //This function will return true when the permission id of an authorized users role will be 4(delete user) otherwise false
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin, 4);
    }

    //This function will return true when the permission id of an authorized users role will be 1(view user) & 2(create user) both
    // or only 1(view user) or only 2(create user) otherwise false
    public function view_create($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 1 && $permission->id == 2) || $permission->id == 1 || $permission->id == 2) {
                    return true;
                }
            }
        }
        return false;
    }
}

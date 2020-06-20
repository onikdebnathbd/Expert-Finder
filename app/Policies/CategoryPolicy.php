<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  CategoryPolicy
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

    //This function will return true when the permission id of an authorized users role will be 11(view category) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 11);
    }

    //This function will return true when the permission id of an authorized users role will be 12(create category) otherwise false
    public function create(Admin $admin)
    {
        return $this->getPermission($admin, 12);
    }

    //This function will return true when the permission id of an authorized users role will be 13(edit category) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 13);
    }

    //This function will return true when the permission id of an authorized users role will be 14(delete category) otherwise false
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin, 14);
    }

    //This function will return true when the permission id of an authorized users role will be 15(publish category) otherwise false
    public function publish(Admin $admin)
    {
        return $this->getPermission($admin, 15);
    }

    //This function will return true when the permission id of an authorized users role will be 11(view category) & 12(create category) both
    //or only 11(view category) or only 12(create category) otherwise false
    public function view_create($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 11 && $permission->id == 12) || $permission->id == 11 || $permission->id == 12) {
                    return true;
                }
            }
        }
        return false;
    }

    //This function will return true when the permission id of an authorized users role will be 13(edit category) & 14(delete category) both
    //or only 13(edit category) or only 14(delete category) otherwise false
    public function edit_delete($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 13 && $permission->id == 14) || $permission->id == 13 || $permission->id == 14) {
                    return true;
                }
            }
        }
        return false;
    }
}

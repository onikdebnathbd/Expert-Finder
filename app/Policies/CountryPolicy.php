<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  CountryPolicy
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

    //This function will return true when the permission id of an authorized users role will be 16(view country) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 16);
    }

    //This function will return true when the permission id of an authorized users role will be 17(create country) otherwise false
    public function create(Admin $admin)
    {
        return $this->getPermission($admin, 17);
    }

    //This function will return true when the permission id of an authorized users role will be 18(edit country) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 18);
    }

    //This function will return true when the permission id of an authorized users role will be 19(delete country) otherwise false
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin, 19);
    }

    //This function will return true when the permission id of an authorized users role will be 20(publish country) otherwise false
    public function publish(Admin $admin)
    {
        return $this->getPermission($admin, 20);
    }

    //This function will return true when the permission id of an authorized users role will be 16(view country) & 17(create country) both
    //or only 16(view country) or only 17(create country) otherwise false
    public function view_create($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 16 && $permission->id == 17) || $permission->id == 16 || $permission->id == 17) {
                    return true;
                }
            }
        }
        return false;
    }

    //This function will return true when the permission id of an authorized users role will be 18(edit country) & 19(delete country) both
    //or only 18(edit country) or only 19(delete country) otherwise false
    public function edit_delete($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 18 && $permission->id == 19) || $permission->id == 18 || $permission->id == 19) {
                    return true;
                }
            }
        }
        return false;
    }
}
